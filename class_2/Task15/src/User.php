<?php
namespace App;

class User
{
    private string $name;
    private array $address = [];
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function addAddress(User\Address $address): void
    {
        array_push($this->address, $address);
    }
    public function getAddresses(): array
    {
        return $this->address;
    }
}
