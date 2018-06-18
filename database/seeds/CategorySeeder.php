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
            'category_name' => 'other',
            'category_description' => 'pizza with chicken',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'category_name' => 'vege',
            'category_description' => 'who eats it?',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'category_name' => 'meat tornado',
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
