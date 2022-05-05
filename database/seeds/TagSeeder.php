<?php

use App\Tag;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Carne', 'Pesce', 'Vegano', 'Vegetariano', 'Senza glutine', 'Senza lattosio'];

        foreach ($tags as $key => $tag) {
            Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag)
            ]);
        }
    }
}
