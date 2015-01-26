<?php
namespace Foo;
class Foo{
    protected $bar;
    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }
    public function fire()
    {
        return $this->bar->doSomething();
    }
}