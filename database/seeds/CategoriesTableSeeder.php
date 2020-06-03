<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Zabiegi Kosmetyczne na twarz',
            'Pielęgnacja oczu',
            'Zabiegi kosmetyczne na ciało',
            'Pielęgnacja dłoni i stóp',
        ];


        for ($i=0; $i < count($categories); $i++) { 
            $category = new Category;
            $category->category_title = $categories[$i];

            if ($i === 0 || $i === 3) $category->featured = 1;

            $category->save();
        }
    }
}
