<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $products = config('products');
        // dd($products);

        foreach ($products as $product) {
            $new_product = new Product();
            $new_product->title = $product['title'];
            $new_product->description = $product['description'];
            $new_product->thumb = $product['thumb'];
            $new_product->price = $product['price'];
            $new_product->series = $product['series'];
            $new_product->sale_date = $product['sale_date'];
            $new_product->type = $product['type'];
            $new_product->save();
        }
    }
}
