<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\ProductDetail;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name_category' => 'Vegetables']);
        Category::create(['name_category' => 'Fruits']);
        Category::create(['name_category' => 'Juice']);
        Category::create(['name_category' => 'Dried']);

        ProductDetail::create([
            'product_name' => 'Bell Pepper',
            'discount' => 30,
            'cost' => 80.00,
            'category_id' => 1,
            'available' => true,
            'image' => 'images/product-1.jpg'
        ]);
    }
}
