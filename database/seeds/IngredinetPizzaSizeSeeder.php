<?php

use Illuminate\Database\Seeder;

class IngredinetPizzaSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 1,
            'pizza_size_size_name' => 'small',
            'ingredient_size_price' => 10
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 1,
            'pizza_size_size_name' => 'medium',
            'ingredient_size_price' => 15
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 1,
            'pizza_size_size_name' => 'large',
            'ingredient_size_price' => 20
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 1,
            'pizza_size_size_name' => 'gigant',
            'ingredient_size_price' => 25
        ]);
        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 2,
            'pizza_size_size_name' => 'small',
            'ingredient_size_price' => 10
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 2,
            'pizza_size_size_name' => 'medium',
            'ingredient_size_price' => 15
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 2,
            'pizza_size_size_name' => 'large',
            'ingredient_size_price' => 20
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 2,
            'pizza_size_size_name' => 'gigant',
            'ingredient_size_price' => 25
        ]);
    }
}
