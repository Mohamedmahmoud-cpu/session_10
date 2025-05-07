<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\brand;
use App\Models\product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Brand::factory()->count(8)->create()->each(function($brand){
            $brand->products()->createMany(
                Product::factory()->count(3)->make()->toArray()
            );
        });
        
    }
}
