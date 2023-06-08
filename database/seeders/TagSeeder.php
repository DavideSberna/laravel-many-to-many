<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'radio',
            'news',
            'music',
            'sports',
            'technology',
            'entertainment',
        ];

        foreach($tags as $tag){
            $newTag = new Tag();
            $newTag->name= $tag;
            $newTag->slug= Str::slug($tag, '-');
            $newTag->save();
        }
    }
}
