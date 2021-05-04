<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Collection::make([
            'Electronic Devices',
            'Electronic Accessories',
            'TV & Home Appliances',
            'Health & Beauty',
            'Babies & Toys',
            'Groceries & Pets',
            'Home & Lifestyle',
            'Women\'s Fashion',
            'Men\'s Fashion',
            'Watches & Accessories',
            'Sports & Outdoor',
            'Automotive & Motorbike'
        ])->each(function ($category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($category);
            $newCategory->save();
        });
    }
}
