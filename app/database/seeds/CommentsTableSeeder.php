<?php

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->delete();

        $comments = new Comment();
        //$user->email = 'ingytrader@gmail.com';
        $comments->body = 'my first seeded comment';
        $comments->save();

    }

}