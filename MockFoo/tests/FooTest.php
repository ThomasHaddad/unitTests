<?php
use Foo\Foo;
use Foo\Bar;

class FooTest extends \PHPUnit_Framework_TestCase
{
    protected $foo;
    protected $mock;

    public function setUp()
    {
//        Pour chacune des classes mockées, mieux vaut instancier dans des tests à part pour éviter de surcharger le setup
    }

    public function testBasicExample()
    {
        $this->mock = $this->getMock('Foo\Bar');
        $this->mock->expects($this->exactly(1))->method('doSomething')->will($this->returnValue("Hello i'm Bar"));
        $this->foo = new Foo($this->mock);
        $this->assertEquals("Hello i'm Bar", $this->foo->fire());
    }
}