<?php

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->delete();

        $user = User::first();

        $post = new Post();
        //$user->email = 'ingytrader@gmail.com';
        $post->title = 'title of first seeded post';
        $post->body = 'my first seeded body';
        $post->user_id = $user->id;
        
        
        $post->save();

    }

}