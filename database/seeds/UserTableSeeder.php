<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "chanapol ruensakean";
        $user->user_type_id = "1";
        $user->username = "admin";
        $user->email = "chanapol50@hotmail.com";
        $user->password = bcrypt('1234');
        $user->save();
    }
}
