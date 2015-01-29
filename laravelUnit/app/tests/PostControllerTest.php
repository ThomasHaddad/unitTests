<?php
/**
 * Created by PhpStorm.
 * User: thomashaddad
 * Date: 29/01/15
 * Time: 12:23
 */

class PostControllerTest extends TestCase{
    protected $mock;

    public function setUp(){
        parent::setUp();
        $this->mock = Mockery::mock('Eloquent', 'Post');
    }

    public function tearDown(){
        parent::tearDown();
        Mockery::close();
    }

    /**
     * @test
     */
    public function testHomePostsDataView()
    {
        $this->mock->shouldReceive('all')
            ->once();
        $this->app->instance('Post', $this->mock);

        $this->call('GET', 'posts');
        $this->assertViewHas('posts');
    }
    /**
     * @test
     */
    public function testRedirectStore(){
        $inputs=['title'=>'titre','content'=>'bla'];
        $this->mock->shouldReceive('create')
            ->once()
            ->with($inputs);

        $this->app->instance('Post',$this->mock);

        $this->call('POST', 'posts',$inputs);
        $this->assertRedirectedToRoute('posts.index',null,['message'=>'success']);
    }

    public function testRedirectStoreWithErrors(){
        $this->call('Post','posts');

        $this->assertRedirectedToRoute('posts.create');
        $this->assertSessionHasErrors(['title']);
    }
}