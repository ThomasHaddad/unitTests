<?php
namespace Hangman;

class Word {

    private $word="";
    private $lettersTried=array();
    private $lettersFound=array();
    private $pattern='/^[a-z]+$/';

    public function __construct($word){
        if(!is_string($word)){
            throw new \InvalidArgumentException('not a valid string');
        }
        if(!preg_match($this->pattern,$word)){
            throw new \InvalidArgumentException('not a valid string');
        }
        $this->word=$word;
    }

    public function tryLetter($letter){
        if(!is_string($letter)){
            throw new \InvalidArgumentException('not a valid string');
        }
        if(!preg_match($this->pattern,$letter)){
            throw new \InvalidArgumentException('not a valid string');
        }
        if(strchr($this->word,$letter)){
//            $this->lettersFound[]=$letter;
            return true;
        }
    }

    public function getLettersFound(){

    }

    public function getWord(){
        return $this->word;
    }

    public function getLettersTried(){

    }
}