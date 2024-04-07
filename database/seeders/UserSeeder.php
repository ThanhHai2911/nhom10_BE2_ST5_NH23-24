<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'user_name' => 'TruongThanh',
                'user_email' => 'truongthanh@gmail.com',
                'user_password' => '123456'
            ],
            [
                'user_name' => 'ThanhHai',
                'user_email' => 'thanhhai@gmail.com',
                'user_password' => '123456'
            ],
            [
                'user_name' => 'DucKhanh',
                'user_email' => 'duckhanh@gmail.com',
                'user_password' => '123456'
            ]
        ]);
    }
}
