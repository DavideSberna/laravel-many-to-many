<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

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
            "Siti Web",
            "Applicazioni Web",
            "Progetti Front-end",
            "Progetti Back-end",
            "Progetti Mobile",
            "Progetti Open Source",
            "PHP",
            "Laravel",
            "Html/css",
        ];
        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($category, '-');
            $newCategory->save();
        }
    }
}
