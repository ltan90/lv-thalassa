<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $args = [
            [
                'title' => 'Hydrotherapy',
                'slug' => \Illuminate\Support\Str::slug('Hydrotherapy'),
                'image' => 'product-categories\June2020\UOcEJMCrDATj78BDZUB0.jpg',
                'status' => 'PUBLISHED'
            ],
            [
                'title' => 'Algotherapy',
                'slug' => \Illuminate\Support\Str::slug('Algotherapy'),
                'image' => 'product-categories\June2020\FpHse7NjBJF2q24BtKgh.jpg',
                'status' => 'PUBLISHED'
            ],
            [
                'title' => 'Physiotherapy',
                'slug' => \Illuminate\Support\Str::slug('Physiotherapy'),
                'image' => 'product-categories\June2020\c6zF0m1ONDsJvH8439VQ.jpg',
                'status' => 'PUBLISHED'
            ],
            [
                'title' => 'Aqua Exercise',
                'slug' => \Illuminate\Support\Str::slug('Aqua Exercise'),
                'image' => 'product-categories\June2020\WgilXLPJF5MCY0QW7wk6.jpg',
                'status' => 'PUBLISHED'
            ],
            [
                'title' => 'Underwater Massage',
                'slug' => \Illuminate\Support\Str::slug('Underwater Massage'),
                'image' => 'product-categories\June2020\0WqOiJsGqVSGhmje4agX.jpg',
                'status' => 'PUBLISHED'
            ],
        ];

        foreach ($args as $item){
            \App\ProductCategory::create($item);
        }
    }
}
