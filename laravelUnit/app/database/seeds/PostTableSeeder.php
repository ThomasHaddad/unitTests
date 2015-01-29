<?php

class PostTableSeeder extends Seeder {

public function run()
{
DB::table('posts')->delete();

DB::table('posts')->insert(array(
    array(
        "title"=>'article 1',
        "content"=>"premier contenu",
        "status"=>"published",
        "user_id"=>1
    ),
    array(
        "title"=>'article 2',
        "content"=>"deuxième contenu",
        "status"=>"unpublished",
        "user_id"=>1
    ),
));
}

}