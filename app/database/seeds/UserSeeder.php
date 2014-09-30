<?php
 
class UserSeeder
  extends DatabaseSeeder
{
  public function run()
  {
    $users = [
      [
        "username" => "antonio",
        "password" => Hash::make("antonio"),
        "email"    => "antoniocachuan@gmail.com",
        "firstname"=> "Antonio",
        "lastname" => "Cachuan"
      ]
    ];
  
    foreach ($users as $user) {
      User::create($user);
    }
  }
}