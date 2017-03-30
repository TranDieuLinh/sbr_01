<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Công nghệ thông tin'],
            ['name' => 'Kinh tế'],
            ['name' => 'Văn học'],
            ['name' => 'Lịch sử'],
            ['name' => 'Địa lý'],
            ['name' => 'Truyện tranh'],
        ]);
    }
}
