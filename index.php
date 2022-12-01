<?php


spl_autoload_register(fn(string $class_name)=>require $class_name.'.php');

$person = new student("John", "Doe");

$person->setBirthdate(new DateTime('1980-01-01'));


echo $person->sayHello();

