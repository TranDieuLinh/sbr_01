<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'user_id' => 1,
                'book_id' => 7,
                'stream_link' => null,
                'caption' => '24h.com.vn',
                'content' => 'HLV Van Gaal “đốt” 300 triệu euro sau 2 mùa, Jose Mourinho hè năm ngoái.'
            ],
            [
                'user_id' => 1,
                'book_id' => 8,
                'stream_link' => null,
                'caption' => '24h.com.vn',
                'content' => 'HLV Van Gaal “đốt” 300 triệu euro sau 2 mùa, Jose Mourinho hè năm ngoái .'
            ],
            [
                'user_id' => 1,
                'book_id' => 9,
                'stream_link' => null,
                'caption' => '24h.com.vn',
                'content' => 'HLV Van Gaal “đốt” 300 triệu euro sau 2 mùa, Jose Mourinho hè năm ngoái c.'
            ],
            [
                'user_id' => 1,
                'book_id' => 10,
                'stream_link' => 'https://www.youtube.com/embed/LCIhdcxun8o',
                'caption' => 'Phai dấu cuộc tình',
                'content' => null,
            ],
            [
                'user_id' => 1,
                'book_id' => 6,
                'stream_link' => null,
                'caption' => '24h.com.vn',
                'content' => 'HLV Van Gaal “đốt” 300 triệu euro sau 2 mùa, Jose Mourinho hè năm ngoái .'
            ],
            [
                'user_id' => 1,
                'book_id' => 3,
                'stream_link' => 'https://www.youtube.com/embed/uvWhxyAYGFI',
                'caption' => 'Tình yêu hoa gió',
                'content' => null,
            ],
            [
                'user_id' => 1,
                'book_id' => 1,
                'stream_link' => null,
                'caption' => '24h.com.vn',
                'content' => 'HLV Van Gaal “đốt” 300 triệu euro sau 2 mùa, Jose Mourinho hè năm ngoái .'
            ],
            [
                'user_id' => 1,
                'book_id' => 7,
                'stream_link' => 'https://www.youtube.com/embed/Llw9Q6akRo4',
                'caption' => 'Lạc trôi',
                'content' => null,
            ],
            [
                'user_id' => 1,
                'book_id' => 6,
                'stream_link' => null,
                'caption' => '24h.com.vn',
                'content' => 'HLV Van Gaal “đốt” 300 triệu euro sau 2 mùa, Jose Mourinho hè năm ngoái .'
            ],
            [
                'user_id' => 1,
                'book_id' => 2,
                'stream_link' => 'https://www.youtube.com/embed/uvWhxyAYGFI',
                'caption' => 'Tình yêu hoa gió',
                'content' => null,
            ],
            [
                'user_id' => 1,
                'book_id' => 5,
                'stream_link' => null,
                'caption' => '24h.com.vn',
                'content' => 'HLV Van Gaal “đốt” 300 triệu euro sau 2 mùa, Jose Mourinho hè năm ngoái .'
            ],
            [
                'user_id' => 1,
                'book_id' => 9,
                'stream_link' => 'https://www.youtube.com/embed/Llw9Q6akRo4',
                'caption' => 'Lạc trôi',
                'content' => null,
            ],
            [
                'user_id' => 1,
                'book_id' => 3,
                'stream_link' => 'https://www.youtube.com/embed/uvWhxyAYGFI',
                'caption' => 'Tình yêu hoa gió',
                'content' => null,
            ],
            [
                'user_id' => 1,
                'book_id' => 1,
                'stream_link' => null,
                'caption' => '24h.com.vn',
                'content' => 'HLV Van Gaal “đốt” 300 triệu euro sau 2 mùa, Jose Mourinho hè năm ngoái .'
            ],
            [
                'user_id' => 1,
                'book_id' => 7,
                'stream_link' => 'https://www.youtube.com/embed/Llw9Q6akRo4',
                'caption' => 'Lạc trôi',
                'content' => null,
            ],
            [
                'user_id' => 1,
                'book_id' => 6,
                'stream_link' => null,
                'caption' => '24h.com.vn',
                'content' => 'HLV Van Gaal “đốt” 300 triệu euro sau 2 mùa, Jose Mourinho hè năm ngoái .'
            ],
            [
                'user_id' => 1,
                'book_id' => 2,
                'stream_link' => 'https://www.youtube.com/embed/uvWhxyAYGFI',
                'caption' => 'Tình yêu hoa gió',
                'content' => null,
            ],
        ]);
    }
}
