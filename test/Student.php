<?php
class Student {
    private string $firstName;
    private string $lastName;
    private array $address;
  public function __construct( string $firstName, string $lastName, array $address ){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->address = $address;
  }
  public function setFirstName(string $firstName): void
  {
    $this->firstName = $firstName;
  }
public function getFirstName(): string
{
    return $this->firstName;
}
public function setLastName (string $lastName): void
{
    $this->lastName = $lastName;
}
public function getLastName(): string
{
    return $this->lastName;
}
public function setAddress(array $address): void
{
    $this->address = address;
}
public function getAddress(): array
{
    return $this->address;
}

}