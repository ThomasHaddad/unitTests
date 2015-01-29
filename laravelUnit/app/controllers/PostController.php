<?php
/**
 * Created by PhpStorm.
 * User: thomashaddad
 * Date: 29/01/15
 * Time: 12:32
 */

class PostController extends BaseController {
    protected $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    public function index(){
        $posts=$this->post->all();
        return View::make('posts.index',compact('posts'));
//        return 'hello RESTfull index';
    }
    public function store()
    {
        $input = Input::all();
        $this->post->create($input);
        $v = Validator::make($input,['title'=>'required','content'=>'required']);
        if($v->fails()){
            return Redirect::route('posts.create')->withErrors($v->messages());
        }
        return Redirect::route('posts.index')->with('message', 'success');
    }
}