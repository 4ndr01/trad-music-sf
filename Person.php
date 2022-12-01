<?php

class Person
{
    private string $firstName;
    private string $lastName;
    private DateTime $birthdate;

    public const MALE = "Homme";
    public const FEMALE = "Femme";

    public function __construct(string $firstName ,string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }





    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getLastName(): string
    {
        return $this->lastName;
    }


    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }


    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    public function setBirthdate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }




}