<?php
namespace bookstore\Domain;
class Customer{
    private $id;
    private $firstname;
    private $surname;
    private $email;
    private static $lastId = 0;
    public function __construct(int $id,
        string $firstname,
        string $surname,
        string $email) {
        if ($id == null){
            $this -> id = ++self::$lastId;
        } else {
            $this->id=$id;
            if ($id > self::$lastId){
                self::$lastId=$id;
            }
        }
        $this -> firstname = $firstname;
        $this -> surname = $surname;
        $this -> email = $email;
    }
    public function getId():id {
        return $this->id;
    }
    public function getFirstname(): string {
        return $this -> firstname;
    }
    public function getSurname(): string {
        return $this -> surname;
    }
    public function getEmail(): string {
        return $this -> email;
    }
    public function setEmail(string $email) {
        return $this -> email = $email;
    }
    public static function getLastId():int {
        return self::$lastId;
    }
}

