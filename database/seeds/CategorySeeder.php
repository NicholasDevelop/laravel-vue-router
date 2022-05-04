<?php

use App\Category;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

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
            'Antipasti', 'Primi', 'Secondi', 'Contorni', 'Dolci'
        ];

        foreach ($categories as $key => $name) {
            $category = new Category();
            $category->name = $name;
            $category->slug = Str::slug( $name );

            $category->save();
        }
    }
}
