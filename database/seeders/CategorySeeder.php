<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'Phone' => 'Iphone',
                'Tablet' => 'IPad',
                'Laptop' => 'Mac'
            ],
            [
                'Phone' => 'SamSung',
                'Tablet' => 'SamSung',
                'Laptop' => 'Asus'
            ],
            [
                'Phone' => 'Xiaomi',
                'Tablet' => 'Xiaomi',
                'Laptop' => 'Acer'
            ],
            
        ]);
    }
}
