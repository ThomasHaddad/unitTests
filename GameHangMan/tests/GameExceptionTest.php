<?php
/**
 * Created by PhpStorm.
 * User: thomashaddad
 * Date: 26/01/15
 * Time: 16:06
 */

use Hangman\Game;
use Hangman\Word;
class GameExceptionTest extends \PHPUnit_Framework_TestCase{

    protected $game ;
    protected function setUp()
    {
        $this->game = new Game(new Word('phpunit'));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidArgumentException(){
        $this->setExpectedException('InvalidArgumentException', 'not a valid string');
        $this->game->tryLetter(12);
    }
    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidWordSetUp(){
        $this->setExpectedException('InvalidArgumentException', 'not a valid string');
        new Word("abc12");
    }
}