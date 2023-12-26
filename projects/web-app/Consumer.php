<?php

class Consumer
{
    // Defining Property
    private string $firstName;
    private string $lastname; 

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastname = $lastName;
    }


    //Defining Method
    public function getFirstName() : string {

        return $this->firstName;
        
    }

    public function getLastName(): string {
        return $this->lastname;
    }

    public function setFirstName(string $name): void {
        $this->firstName = $name;
    }


    public function setLastName(string $name): void {
        $this->lastname = $name;
    }
}
