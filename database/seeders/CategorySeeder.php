<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $categories = [
            [ 'name' => 'Furniture' ],
            [ 'name' => 'Electronics' ],
            [ 'name' => 'Cars' ],
            [ 'name' => 'Property' ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
