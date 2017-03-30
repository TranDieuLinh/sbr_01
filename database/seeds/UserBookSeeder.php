<?php

use Illuminate\Database\Seeder;

class UserBookSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_book')->insert([
            [
                'user_id' => 1,
                'book_id' => 1,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 3,
                'book_id' => 2,
                'rate' => 4,
                'favorite' => 1,
            ],
            [
                'user_id' => 4,
                'book_id' => 3,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 1,
                'book_id' => 6,
                'rate' => 4,
                'favorite' => 1,
            ],
            [
                'user_id' => 1,
                'book_id' => 8,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 2,
                'book_id' => 7,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 2,
                'book_id' => 7,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 2,
                'book_id' => 7,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 1,
                'book_id' => 9,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 1,
                'book_id' => 10,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 1,
                'book_id' => 3,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 1,
                'book_id' => 4,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 2,
                'book_id' => 2,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 2,
                'book_id' => 4,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 4,
                'book_id' => 7,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 4,
                'book_id' => 5,
                'rate' => 5,
                'favorite' => 1,
            ],
            [
                'user_id' => 3,
                'book_id' => 3,
                'rate' => 5,
                'favorite' => 1,
            ],
        ]);
    }
}
