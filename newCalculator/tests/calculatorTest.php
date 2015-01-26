<?php

use Calculator\Calculator;
use Calculator\Addition;
use Calculator\Subtract;
use Calculator\Multiplication;
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    protected $calculator;
    public function setUp()
    {
        $this->calculator = new Calculator;
    }
    public function testAddNumbers()
    {
        $this->calculator->setOperands(5,6,7,8);
        $this->calculator->setOperation(new Addition);
        $this->calculator->calculate();
        $this->assertEquals(26, $this->calculator->getResult());
    }
}