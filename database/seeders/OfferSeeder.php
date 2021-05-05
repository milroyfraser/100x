<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    public function run()
    {
        Category::all()->each(function (Category $category) {
            Offer::factory(10)->create([
                'category_id' => $category->id,
            ]);
        });
    }
}
