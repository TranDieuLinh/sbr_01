<?php

use Illuminate\Database\Seeder;

class FollowingSeeder extends Seeder
{
    public function run()
    {
        DB::table('followings')->insert([
            [
                'follower_id' => 1,
                'following_id' => 3,
                'new_reviews' => 1,
            ],
            [
                'follower_id' => 1,
                'following_id' => 3,
                'new_reviews' => 2,
            ],
            [
                'follower_id' => 1,
                'following_id' => 4,
                'new_reviews' => 3,
            ],
            [
                'follower_id' => 1,
                'following_id' => 5,
                'new_reviews' => 4,
            ],
            [
                'follower_id' => 1,
                'following_id' => 6,
                'new_reviews' => 2,
            ],
            [
                'follower_id' => 3,
                'following_id' => 1,
                'new_reviews' => 2,
            ],
            [
                'follower_id' => 4,
                'following_id' => 1,
                'new_reviews' => 3,
            ],
            [
                'follower_id' => 4,
                'following_id' => 3,
                'new_reviews' => 1,
            ],
            [
                'follower_id' => 4,
                'following_id' => 1,
                'new_reviews' => 1,
            ],
            [
                'follower_id' => 6,
                'following_id' => 1,
                'new_reviews' => 1,
            ],
        ]);
    }
}
