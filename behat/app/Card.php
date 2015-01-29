<?php

class Card {

    /**
     * @return array float
     */
    protected $products=[];

    public function buy(Product $p)
    {

        $this->products[] = $p->getPrice();
    }

    public function total()
    {
        $total = 0;
        foreach($this->products as $p)
        {
            $total += $p;
        }

        return $total;
    }

}