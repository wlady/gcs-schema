<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(Companies::class);
        $this->call(Categories::class);
        $this->call(Products::class);
        $this->call(Attributes::class);
        // assign attributes
        $attributes = Attribute::all('id')->pluck('id')->toArray();
        $categories = Category::all();
        foreach ($categories as $category) {
            shuffle($attributes);
            $attach = array_slice($attributes, 0, rand(1, count($attributes)));
            $category->attributes()->attach($attach);
        }
        $products = Product::all();
        sort($attributes);
        $categories = $categories->pluck('id')->toArray();
        foreach ($products as $product) {
            shuffle($categories);
            $attach = array_slice($categories, 0, rand(1, count($categories) / 2 ));
            $product->categories()->sync($attach);
            $attach = array_slice($attributes, 0, rand(1, count($attributes)));
            $product->attributes()->sync($attach);
        }
    }
}
