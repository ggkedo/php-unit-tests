<?php
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testGetters()
    {
        $product = new \App\Entity\Product('Apple', 10);
        $this->assertEquals('Apple', $product->getName());
        $this->assertEquals(10, $product->getPrice());
        $this->assertEquals(0, $product->getDiscount());
        $this->assertEquals(0, $product->getStock());
    }

    public function testDiscount()
    {
        $product = new \App\Entity\Product('Apple', 10);
        $this->assertEquals('0%', $product->getDiscountText());

        $product->setDiscount(0.2);
        $this->assertEquals(0.2, $product->getDiscount());
        $this->assertEquals('20%', $product->getDiscountText());
    }

    public function testRealPrice()
    {
        $product = new \App\Entity\Product('Apple', 10);
        $this->assertEquals(10, $product->getRealPrice());

        $product->setDiscount(0.2);
        $this->assertEquals(8, $product->getRealPrice());
    }

    public function testStock()
    {
        $product = new \App\Entity\Product('Apple', 10);
        $product->updateStock(20);
        $product->updateStock(10);
        $this->assertEquals(30, $product->getStock());
    }

    public function testAvailable()
    {
        $product = new \App\Entity\Product('Apple', 10);
        $this->assertEquals(false, $product->isAvailable());
        $product->updateStock(10);
        $this->assertEquals(true, $product->isAvailable());
    }

}