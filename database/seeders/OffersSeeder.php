<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Offers;
use Illuminate\Database\Seeder;

class OffersSeeder extends Seeder
{
    public function run()
    {
        Category::all()->each(function (Category $category) {
            Offers::factory(10)->create([
                'category_id' => $category->id,
            ]);
        });
    }
}
