<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Samsung UHD TV',
                'price' => '45000',
                'description' => 'Smart ultra hd tv with 4k resolution',
                'category' => 'tv',
                'gallery' => 'https://i.pinimg.com/564x/4f/52/4d/4f524d41e1c0c97cda47d61adf99a911.jpg'
            ],
            [
                'name' => 'Bomaker Sound Bar',
                'price' => '25000',
                'description' => '100W soundbar with dolby sound',
                'category' => 'speakers',
                'gallery' => 'https://i.pinimg.com/564x/21/fd/7d/21fd7d6be2ab04816aa68d10233890b7.jpg'
            ],
            [
                'name' => 'Lg Fridge',
                'price' => '35000',
                'description' => '250 litre single door fridge',
                'category' => 'fridge',
                'gallery' => 'https://i.pinimg.com/564x/0d/06/da/0d06da8ebf50d7d4128d9e71128cd008.jpg'
            ]
        ]);
    }
}
