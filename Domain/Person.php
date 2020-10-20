<?php
namespace bookstore\Domain;
class Person{
    protected $firstname;
    protected $surname;
    public function __construct(string $firstname, string $surname) {
        $this->firstname = $firstname;
        $this->surname = $surname;
    }
    public function getfirstname(): string {
        return $this->firstname;
    }
    public function getsurname(): string {
        return $this->surname;
    }
}

