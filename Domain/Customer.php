<?php
namespace bookstore\Domain;
class Customer extends Person{
    private $id;
//    private $firstname;
//    private $surname;
    private $email;
    private static $lastId = 0;
    public function __construct(
        int $id,
        string $name,
        string $surname,
        string $email
            ) {
       if (empty($id)){
           $this->id = ++self::$lastId;
        }else{
            $this->id = $id;
            if ($id > self::$lastId){
                self::$lastId=$id;
            }
        }
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> email = $email;
    }
    public function getId():id {
        return $this->id;
    }
//    public function getFirstname(): string {
//        return $this -> firstname;
//    }
//    public function getSurname(): string {
//        return $this -> surname;
//    }
    public function getEmail(): string {
        return $this -> email;
    }
    public function setEmail($email): string {
                $this -> email = $email;
    }
    public static function getLastId():int {
        return self::$lastId;
    }
}

