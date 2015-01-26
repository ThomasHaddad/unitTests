<?php

namespace Calculator;
use interfaces\iOperator;


class Calculator{
    private $operands;
    private $operation;
    private $total;

    public function setOperands($arrayVal){
        $arrayVal=func_get_args();
        foreach($arrayVal as $val){
            if(!is_int($val)){
                throw new \InvalidArgumentException('NaN');
            }
        }
        $this->operands=$arrayVal;
    }

    public function setOperation(iOperator $operation){
        $this->operation=$operation;
        return $this;
    }

    public function calculate(){
        $this->total=$this->operation->run($this->operands,$this->total);
        return $this;
    }

    public function getResult(){
        return $this->total;
    }


}