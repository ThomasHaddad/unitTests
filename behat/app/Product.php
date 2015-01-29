<?php

class Product {

    /**
     * @return float
     */
    protected $price;

    public function __construct($price)
    {
        $price = (float) $price;

        if(!$price){
            throw new InvalidArgumentException(sprintf('this value %s is not float', $price));
        }

        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }



}