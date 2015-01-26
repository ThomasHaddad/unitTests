<?php

namespace Calculator;

use interfaces\iOperator;

class Addition implements iOperator{
    public function run($numbers,$current){
        foreach($numbers as $val){
            $current+=$val;
        }
        return $current;
    }
}