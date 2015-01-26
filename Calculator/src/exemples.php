<?php


// nombre N d'arguments
// php5.6

class Foo{
    public function bar (...$args){
        foreach($args as $arg){

        }
    }

// avant 5.6

}class Foo{
    public function bar (){
        $args=func_get_args();
        foreach($args as $arg){

        }
    }
}
