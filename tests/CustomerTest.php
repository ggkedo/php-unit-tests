<?php
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testGetFirstname()
    {
        $customer = new \App\Entity\Customer('John', 'Smith');
        $this->assertEquals('John', $customer->getFirstname());
    }

    public function testGetLastname()
    {
        $customer = new \App\Entity\Customer('John', 'Smith');
        $this->assertEquals('Smith', $customer->GetLastname());
    }

    public function testGetFullname()
    {
        $customer = new \App\Entity\Customer('John', 'Smith');
        $this->assertEquals('John Smith', $customer->GetFullname());
    }

    public function testWOLastName()
    {
        $customer = new \App\Entity\Customer('Sinbad');
        $this->assertEquals('Sinbad', $customer->GetFullname());
    }
}