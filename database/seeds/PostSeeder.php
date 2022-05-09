<?php

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
Use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = Category::all();
        $categoriesId = $categories->pluck('id')->all();

        $tags = Tag::all();
        $tagsId = $tags->pluck('id')->all();

        for ($i=0; $i < 50; $i++) { 

            $post = new Post();

            $post->title = $faker->words(8,true);
            $post->slug = Str::slug($post->title, '-');
            $post->content = $faker->paragraph(10,true);
            $post->image = $faker->imageUrl(400, 400, true);
            $post->published_at = $faker->randomElement([null, $faker->dateTime()]);
            $post->category_id = $faker->optional()->randomElement( $categoriesId );

            $randomTags = $faker->randomElements( $tagsId, 2 );

            $post->save();

            $post->tags()->attach( $randomTags );
        }
    }
}
