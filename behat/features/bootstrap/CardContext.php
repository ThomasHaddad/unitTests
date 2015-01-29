<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

class CardContext implements Context, SnippetAcceptingContext
{
    protected $card;

    /**
     * @Given An empty card
     */
    public function anEmptyCard()
    {
        $this->card = new Card;
    }

    /**
     * @Then The card price is :arg1 euro
     */
    public function theCardPriceIsEuro($price)
    {

        if ($this->card->total() != $price) {
            throw new Exception(sprintf('this value %s is not a float', $price));
        }

    }


}