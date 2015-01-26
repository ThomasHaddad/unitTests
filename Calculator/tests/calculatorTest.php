<?php

use Calculator\CalculatorStart;

class CalculatorStartTest extends \PHPUNIT_Framework_TestCase{

    protected $calculator;

    public function setUp(){
        $this->calculator=new CalculatorStart;
    }

    /*
     * @test
     * */
    public function testCalculator(){
        $this->assertEquals(0,$this->calculator->getResult());
    }

    /*
     * @test
     * @dataProvider listValue
     * */
    public function testAcceptsMultipleArgsToAddNumber(){
        $this->calculator->add(1,2,3,4,5,6,7);
        $this->assertEquals(28,$this->calculator->getResult());
    }

    /*
     * @testAdd
     * */
    public function testAdd(){
        $this->calculator->add(10);
        $this->assertEquals(10,$this->calculator->getResult());
    }

    /*
     * @testSubstract
     * */
    public function testSubstract(){
        $this->calculator->substract(1,2,3,4,5);
        $this->assertEquals(-15,$this->calculator->getResult());
    }
    /*
     * @testAllOperationsAtOnce
     * */
    public function testAllOperationsAtOnce(){
        $this->calculator->add(5);
        $this->assertEquals(5,$this->calculator->getResult());
        $this->calculator->substract(1,1);
        $this->assertEquals(3,$this->calculator->getResult());
        $this->calculator->multiply(2,3,0);
        $this->assertEquals(0,$this->calculator->getResult());

    }
    /*
     * @testMultiply
     * */
    public function testMultiply(){
        $this->calculator->add(1);
        $this->assertEquals(1,$this->calculator->getResult());
        $this->calculator->multiply(1,2,3);
        $this->assertEquals(6,$this->calculator->getResult());
    }
    public function testInvalidArgumentException(){
        $this->setExpectedException('InvalidArgumentException', 'NaN');
        $this->calculator->add('toto');
    }
}