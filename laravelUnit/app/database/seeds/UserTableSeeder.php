<?php

class UserTableSeeder extends Seeder {

public function run()
{
DB::table('users')->delete();

DB::table('users')->insert(array(
    array(
        "username"=>'Thomas',
        "email"=>"thomas.af.haddad@gmail.com",
        "password"=>Hash::make('Thomas'),
        "score"=>100,
        "age"=>30
    ),
   array(
        "username"=>'Adrien',
        "email"=>"thomas.af.haddad@gmail.com",
        "password"=>Hash::make('Adrien'),
        "score"=>150,
        "age"=>21
    ),

));
}

}