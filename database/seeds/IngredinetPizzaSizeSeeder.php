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
            'pizza_size_id' => 1,
            'ingredient_size_price' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 1,
            'pizza_size_id' => 2,
            'ingredient_size_price' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 1,
            'pizza_size_id' => 3,
            'ingredient_size_price' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 2,
            'pizza_size_id' => 1,
            'ingredient_size_price' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 2,
            'pizza_size_id' => 2,
            'ingredient_size_price' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 2,
            'pizza_size_id' => 3,
            'ingredient_size_price' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 3,
            'pizza_size_id' => 1,
            'ingredient_size_price' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 3,
            'pizza_size_id' => 2,
            'ingredient_size_price' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 3,
            'pizza_size_id' => 3,
            'ingredient_size_price' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 4,
            'pizza_size_id' => 1,
            'ingredient_size_price' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 4,
            'pizza_size_id' => 2,
            'ingredient_size_price' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 4,
            'pizza_size_id' => 3,
            'ingredient_size_price' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 5,
            'pizza_size_id' => 1,
            'ingredient_size_price' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 5,
            'pizza_size_id' => 2,
            'ingredient_size_price' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 5,
            'pizza_size_id' => 3,
            'ingredient_size_price' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 6,
            'pizza_size_id' => 1,
            'ingredient_size_price' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 6,
            'pizza_size_id' => 2,
            'ingredient_size_price' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 6,
            'pizza_size_id' => 3,
            'ingredient_size_price' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 7,
            'pizza_size_id' => 1,
            'ingredient_size_price' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 7,
            'pizza_size_id' => 2,
            'ingredient_size_price' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 7,
            'pizza_size_id' => 3,
            'ingredient_size_price' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ingredients_pizza_sizes')->insert([
            'ingredient_id' => 5,
            'pizza_size_id' => 4,
            'ingredient_size_price' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
