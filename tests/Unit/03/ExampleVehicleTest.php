<?php

use PHPUnit\Framework\TestCase;

class ExampleVehicleTest extends TestCase
{
    /**
     * @var Vehicle $vehicle
     */
    private $bmw;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->bmw = new Bmw();
    }

    public function testAccelerate(): void
    {
        static::assertEmpty($this->bmw->accelerate());
    }

    public function testStopEngine()
    {
        static::assertEmpty($this->bmw->stopEngine());
    }

    public function testBrake()
    {
        static::assertEmpty($this->bmw->brake());
    }

    public function testStartEngine(): void
    {
        static::assertEmpty($this->bmw->startEngine());
    }




}