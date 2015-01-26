<?php
namespace Hangman;


class Game {
    private $word;
    private $attempts=0;
    const MAX_ATTEMPTS = 10;

    public function __construct(Word $word){
        $this->word=$word;
    }

    public function getRemainingAttempts(){
        return self::MAX_ATTEMPTS-$this->attempts;
    }

    public function tryLetter($letter){
        if(!$this->word->tryLetter($letter)){
            $this->attempts++;
            return false;
        }
        return true;
    }

    public function isLetterFound($letter){

    }

    public function tryWord($word){
        return ($word==$this->word->getWord());
    }

}