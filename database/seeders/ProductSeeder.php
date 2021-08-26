<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'lenovo ideapad',
            'desc' => 'this is a dummy discription for product',
            'price' => 10000,
            'pieces_no' => 5,
            'img' => 'products/1.jpg',
            'cat_id' => 1,
        ]);
        Product::create([
            'name' => 'Dell Inspiron',
            'desc' => 'this is a dummy discription for product',
            'price' => 15000,
            'pieces_no' => 10,
            'img' => 'products/2.jpg',
            'cat_id' => 1,
        ]);

        Product::create([
            'name' => 'HP PC',
            'desc' => 'this is a dummy discription for product',
            'price' => 8000,
            'pieces_no' => 3,
            'img' => 'products/3.jpg',
            'cat_id' => 2,
        ]);
        Product::create([
            'name' => 'Acer PC',
            'desc' => 'this is a dummy discription for product',
            'price' => 7000,
            'pieces_no' => 4,
            'img' => 'products/4.jpg',
            'cat_id' => 2,
        ]);

        Product::create([
            'name' => 'Xiaomi Note 10 Lite',
            'desc' => 'this is a dummy discription for product',
            'price' => 6000,
            'pieces_no' => 15,
            'img' => 'products/5.jpg',
            'cat_id' => 3,
        ]);
        Product::create([
            'name' => 'Samsung A30s',
            'desc' => 'this is a dummy discription for product',
            'price' => 3000,
            'pieces_no' =>10,
            'img' => 'products/6.jpg',
            'cat_id' => 3,
        ]);
    }
}
