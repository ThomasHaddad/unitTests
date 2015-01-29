<?php
/**
 * Created by PhpStorm.
 * User: thomashaddad
 * Date: 27/01/15
 * Time: 15:58
 */

class GeneralTest extends TestCase{

    public function testDatabaseTesting(){
        $posts=Post::all();
//        var_dump($posts);
        $this->assertEquals(2,$posts->count());
    }

    /**
     * @test
     */
    public function testHomePage(){
        $this->call('GET','/');
        $this->assertViewHas('posts');
    }

    /**
     * @test match number h2 onto home view
     */
    public function testTitleNumbers(){
        $crawler=$this->client->request('GET','/');
        $h2=$crawler->filter('h2');
        $this->assertEquals(2,count($h2));
    }

    /**
     * @expectedException Illuminate\Database\QueryException
     */
    public function testUserIntegrity(){
        $post= new Post;
        $post->user_id=3;
        $post->save();
    }

    /**
     * @test
     */
    public function testRedirect(){
        $this->call('POST', 'buy');
        $this->assertRedirectedToRoute('home',null,['flash_message'=>'ok']);
    }

    /**
     * @test
     */
    public function testMetaPostModel(){
        $post = new Post;
        $post->title="PHPUnit";
        $post->user_id=1;
        $this->assertEquals("PHPUnit written by user_id 1", $post->meta());
    }
    /**
     * @test
     */
    public function testFilePut(){
        File::shouldReceive('put')->once();
        $this->call('GET','file');
    }
}