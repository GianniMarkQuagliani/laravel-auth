<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
use App\Functions\Helper;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_post = new Post();
            $new_post->title = $faker->sentence();
            $new_post->slug = Helper::generateSlug($new_post->title, Post::class);
            $new_post->text = $faker->paragraph();
            $new_post->reading_time = $faker->numberBetween(1, 60);
            $new_post->date = $faker->date();
            $new_post->save();
        }
    }
}
