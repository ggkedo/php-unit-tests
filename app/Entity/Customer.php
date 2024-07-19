<?php
namespace App\Entity;

class Customer
{
    private $firstname;
    private $lastname;

    public function __construct($firstname, $lastname=null)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
    
    public function getLastname()
    {
        return $this->lastname;
    }

    public function getFullname()
    {
        $name = $this->firstname;
        if($this->lastname) {$name .= ' ' . $this->lastname;}
        return $name;
    }
}