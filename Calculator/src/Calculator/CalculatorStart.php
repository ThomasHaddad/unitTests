<?php

namespace Calculator;

class CalculatorStart{
    private $total;

    public function add(){
        $arrayVal=func_get_args();
        $this->calculate($arrayVal,"+");
    }
    public function substract(){
        $arrayVal=func_get_args();
        $this->calculate($arrayVal,"-");
    }
    public function multiply(){
        $arrayVal=func_get_args();
        $this->calculate($arrayVal,"*");
    }

    public function calculate($numbers,$symbol){
        var_dump($numbers);
        foreach($numbers as $val){
            $this->calcul($val,$symbol);
        }
    }

    public function calcul($number,$symbol){
        if(!is_numeric($number)){
            throw new \InvalidArgumentException(sprintf('(%s) NaN',$number));
        }
        switch($symbol){
            case "+":
                $this->total+=$number;
                break;
            case "-":
                ($this->total==0) ? $this->total=$number : $this->total-=$number;
                break;
            case "*":
                ($this->total==0) ? $this->total=$number : $this->total*=$number;
                break;
        }
    }

    public function getResult(){
        return $this->total;
    }

}
