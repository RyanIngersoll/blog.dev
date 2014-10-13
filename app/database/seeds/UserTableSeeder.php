<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'ingytrader@gmail.com';
        $user->password = ('Joliebay1');
        $user->first_name = 'Walter';
        $user->last_name = 'White';
        $user->save();
    }

}