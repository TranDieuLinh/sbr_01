<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->insert([
            [
                'user_id' => 1,
                'review_id' => 1,
                'content' => 'Hay lắm',
            ],
            [
                'user_id' => 3,
                'review_id' => 1,
                'content' => 'Hay quá',
            ],
            [
                'user_id' => 4,
                'review_id' => 1,
                'content' => 'Được',
            ],
            [
                'user_id' => 5,
                'review_id' => 1,
                'content' => 'Cứ thế phát huy',
            ],
            [
                'user_id' => 3,
                'review_id' => 4,
                'content' => 'Hay lắm',
            ],
            [
                'user_id' => 1,
                'review_id' => 2,
                'content' => 'Hay quá',
            ],
            [
                'user_id' => 3,
                'review_id' => 3,
                'content' => 'Được',
            ],
            [
                'user_id' => 4,
                'review_id' => 5,
                'content' => 'Cứ thế phát huy',
            ],
            [
                'user_id' => 1,
                'review_id' => 5,
                'content' => 'Hay lắm',
            ],
            [
                'user_id' => 3,
                'review_id' => 6,
                'content' => 'Hay quá',
            ],
            [
                'user_id' => 4,
                'review_id' => 7,
                'content' => 'Được',
            ],
            [
                'user_id' => 5,
                'review_id' => 3,
                'content' => 'Cứ thế phát huy',
            ],
            [
                'user_id' => 1,
                'review_id' => 4,
                'content' => 'Hay lắm',
            ],
            [
                'user_id' => 1,
                'review_id' => 8,
                'content' => 'Hay quá',
            ],
            [
                'user_id' => 3,
                'review_id' => 9,
                'content' => 'Được',
            ],
            [
                'user_id' => 4,
                'review_id' => 10,
                'content' => 'Cứ thế phát huy',
            ],
        ]);
    }
}
