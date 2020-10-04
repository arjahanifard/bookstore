<?php
function loginMessage(){
    if (isset($_COOKIE['username'])){
        return "you are ". $_COOKIE['username'];
    } else {
        return "you are not authenticates";
    }
}
function printableTitle(array $book):string{
    $result = '<i>' . $book['title'] . '<i> - '.$book['author'];
    if (!$book['available']){
        $result .= ' <b>Not availbale</b>';
    }
}
function bookingBook(array &$books,string $title):bool{
    foreach ($books as $key => $book){
        if ($books['title']==$title){
            if ($book['available']){
                $books[$key]['available'] = false;
                return true;
            } else {
                return false;    
            }
        }
    }
    return false;
    
            }

