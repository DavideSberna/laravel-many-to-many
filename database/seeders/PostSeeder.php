<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'name' => 'Progetto 1',
                'title' => 'Titolo progetto 1',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 2',
                'title' => 'Titolo progetto 2',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 2,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 3',
                'title' => 'Titolo progetto 3',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 4,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 4',
                'title' => 'Titolo progetto 4',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 5',
                'title' => 'Titolo progetto 5',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 5,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 6',
                'title' => 'Titolo progetto 6',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 4,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 8',
                'title' => 'Titolo progetto 8',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 9',
                'title' => 'Titolo progetto 9',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 10',
                'title' => 'Titolo progetto 10',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 11',
                'title' => 'Titolo progetto 11',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 12',
                'title' => 'Titolo progetto 12',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 13',
                'title' => 'Titolo progetto 13',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 14',
                'title' => 'Titolo progetto 14',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 15',
                'title' => 'Titolo progetto 15',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 16',
                'title' => 'Titolo progetto 16',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 17',
                'title' => 'Titolo progetto 17',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 18',
                'title' => 'Titolo progetto 18',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 19',
                'title' => 'Titolo progetto 19',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 20',
                'title' => 'Titolo progetto 20',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
        ];

        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->title = $post['title'];
            $newPost->slug = Str::slug($post['title'], '-');
            $newPost->image = $post['image'];
            $newPost->difficulty = $post['difficulty'];
            $newPost->description = $post['description'];
            $newPost->programming_language = implode(' - ', $post['programming_language']);
            $newPost->save();
        }
    }
}
