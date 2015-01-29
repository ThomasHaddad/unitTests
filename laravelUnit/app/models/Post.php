<?php

/**
 * Created by PhpStorm.
 * User: thomashaddad
 * Date: 27/01/15
 * Time: 16:17
 * @property int user_id
 */

class Post extends Eloquent{

    protected $fillable=['title','content'];
    public function user(){
        return $this->belongsTo('User');
    }

    public function meta(){
        return sprintf('%s written by user_id %d',$this->title,$this->user_id);
    }
    public function getRules(){
        return[
            'title'=>'required',
            'content'=>'required'
        ];
    }
}