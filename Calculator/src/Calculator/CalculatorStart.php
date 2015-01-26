<?php

namespace Calculator;

class CalculatorStart{
    private $total;

    public function add($arrayVal){
        $arrayVal=func_get_args();
        foreach($arrayVal as $val){
            if(!is_int($val)){
                throw new \InvalidArgumentException('NaN');
            }
            $this->total+=$val;
        }
    }
    public function substract($arrayVal){
        $arrayVal=func_get_args();
        foreach($arrayVal as $val){
            if(!is_int($val)){
                throw new \InvalidArgumentException('NaN');
            }
            $this->total-=$val;
        }
    }
    public function multiply($arrayVal){
        $arrayVal=func_get_args();
        foreach($arrayVal as $val){
            if(!is_int($val)){
                throw new \InvalidArgumentException('NaN');
            }
            $this->total*=$val;
        }
    }
    public function getResult(){
        return $this->total;
    }

}
