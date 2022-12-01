<?php

class student extends Person
{

    public function sayHello():void
    {
        echo "Bonjour , je m'appelle " . $this->getFullName() . " et j'ai " . $this->getBirthdate()->diff(new DateTime())->y . " ans";
    }

    public function getFullName(): string
    {

        return $this->getFirstName().''.substr($this->getLastName(),0,1).'.';
    }

}