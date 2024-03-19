<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Term;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class Attributes extends Seeder
{
    private $attributes = [
        'size' => [
            'S', 'M', 'L', 'XL', 'XXL',
        ],
        'color' => [
            'Black', 'White', 'Blue', 'Green', 'Red',
        ],
        'volume' => [
            'Volume 1', 'Volume 2', 'Volume 3', 'Volume 4',
        ],
        'length' => [
            'Full', 'Half', 'Quarter',
        ],
        'state' => [
            'New', 'Used',
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->attributes as $attribute => $values) {
            $terms = [];
            foreach ($values as $value) {
                $terms[] = Term::create([
                    'value' => $value,
                ]);
            }
            $attribute = Attribute::create([
                'name' => $attribute,
            ]);
            $attribute->terms()->attach(Arr::pluck($terms, 'id'));
        }
    }
}
