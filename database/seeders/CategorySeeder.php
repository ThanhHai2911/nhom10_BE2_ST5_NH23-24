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
        DB::table('categories')->insert([
            [
                'name' => 'Phone',
                'type_id' => '1',
                'type_name' => 'Apple'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '2',
                'type_name' => 'Samsung'
            ],

            [
                'name' => 'Tablet',
                'type_id' => '3',
                'type_name' => 'Xiaomi'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '4',
                'type_name' => 'Gigabyte'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '5',
                'type_name' => 'Nokia'
            ],

            [
                'name' => 'Tablet',
                'type_id' => '6',
                'type_name' => 'Tecno'
            ],
            
            [
                'name' => 'Phone',
                'type_id' => '7',
                'type_name' => 'Sony'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '8',
                'type_name' => 'Acer'
            ],

            [
                'name' => 'Tablet',
                'type_id' => '9',
                'type_name' => 'Asus'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '10',
                'type_name' => 'LG'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '11',
                'type_name' => 'Microsoft'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '12',
                'type_name' => 'Lenovo'
            ],

            [
                'name' => 'Tablet',
                'type_id' => '13',
                'type_name' => 'TCL'
            ],

            [
                'name' => 'Phone',
                'type_id' => '14',
                'type_name' => 'Oppo'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '15',
                'type_name' => 'Hp'
            ],

            [
                'name' => 'Laptop',
                'type_id' => '16',
                'type_name' => 'Dell'
            ],

        ]);
    }
}
