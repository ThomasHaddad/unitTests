<?php
use Hangman\Game;
use Hangman\Word;
class GameTest extends \PHPUnit_Framework_TestCase
{
    protected $game ;
    protected function setUp()
    {
        $this->game = new Game(new Word('phpunit'));
    }

    /**
     * @test
     * @dataProvider letterList
     */
    public function testIsLetterFound($letter,$result){
        $this->assertEquals($result,$this->game->tryLetter($letter));
    }
    public function letterList(){
        return [['p',true],['r',false]];
    }

    /**
     * @test
     */
    public function testTryWord(){
        $this->assertEquals(true,$this->game->tryWord('phpunit'));
    }

    /**
     * @test
     */
    public function testGetRemainingAttempts(){
        $this->assertEquals(10,$this->game->getRemainingAttempts());
    }

    /**
     * @test
     */
    public function testTryLetter(){
        $this->game->tryLetter('a');
        $this->assertEquals(9,$this->game->getRemainingAttempts());
    }
}