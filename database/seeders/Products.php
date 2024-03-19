<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = Company::all('id')->pluck('id')->toArray();
        Product::factory(100)->create()->each(function ($product) use ($companies) {
            shuffle($companies);
            $attachTo = array_slice($companies, 0, rand(1, count($companies) / (rand(2, count($companies)))));
            $product->companies()->sync($attachTo);
        });
    }
}
