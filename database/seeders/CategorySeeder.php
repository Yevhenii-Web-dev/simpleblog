<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::factory()->create([
           'name' => 'Web Design',
        ]);

        Category::factory()->create([
           'name' => 'HTML',
        ]);

        Category::factory()->create([
           'name' => 'Freebies',
        ]);

        Category::factory()->create([
           'name' => 'JavaScript',
        ]);

        Category::factory()->create([
           'name' => 'CSS',
        ]);

        Category::factory()->create([
           'name' => 'Tutorials',
        ]);

    }
}
