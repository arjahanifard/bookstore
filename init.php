<?php
require_once __DIR__.'/book.php';
require_once __DIR__.'/Customer.php';
$book1 = new Book("1984","جورج اورول",9785267,12);
$book2 = new Book("کشتن مرغ مقلد","هارپر لی",978006,2);
$customer1 = new Customer(1,"جان",'دو','johndoe@gmail.com');
$customer2 = new Customer(2, 'ماری','پاپین','mp@gmail.com');
