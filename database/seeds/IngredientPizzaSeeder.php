<?php

use Illuminate\Database\Seeder;

class IngredientPizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 6,
            'pizza_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 7,
            'pizza_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 1,
            'pizza_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 2,
            'pizza_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 6,
            'pizza_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 7,
            'pizza_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 1,
            'pizza_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 3,
            'pizza_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 6,
            'pizza_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 7,
            'pizza_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 5,
            'pizza_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 2,
            'pizza_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 3,
            'pizza_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 6,
            'pizza_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 7,
            'pizza_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 5,
            'pizza_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 4,
            'pizza_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizzas')->insert([
            'ingredient_id' => 5,
            'pizza_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
