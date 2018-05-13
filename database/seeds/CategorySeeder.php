<?php

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
        DB::table('categories')->insert([
            'category_name' => 'with chicken',
            'category_icon' => 'chicken.jpg',
            'category_description' => 'pizza with chicken',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'category_name' => 'vege',
            'category_icon' => 'vege.jpg',
            'category_description' => 'who eats it?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'category_name' => 'meat tornado',
            'category_icon' => 'meat-tornado.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'category_name' => 'frutti di mare',
            'category_description' => 'where is Nemo?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'category_name' => 'tradition',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
