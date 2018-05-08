<?php

use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'ingredient_name' => 'cheese',
            'ingredient_description' => 'dojony z najświeższych krów'
        ]);

        DB::table('ingredients')->insert([
            'ingredient_name' => 'pepperoni',
            'ingredient_description' => 'z najzieleniejszych krzewów'
        ]);

        DB::table('ingredients')->insert([
            'ingredient_name' => 'beef',
            'ingredient_description' => 'wczoraj jeszcze hasał po polach'
        ]);

        DB::table('ingredients')->insert([
            'ingredient_name' => 'chicken',
            'ingredient_description' => 'nie powinien przechodzić przez jezdnie'
        ]);

        DB::table('ingredients')->insert([
            'ingredient_name' => 'spinach',
            'ingredient_description' => 'z zapasów Papaja'
        ]);
    }
}
