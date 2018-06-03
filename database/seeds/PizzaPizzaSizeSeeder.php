<?php

use Illuminate\Database\Seeder;

class PizzaPizzaSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 1,
            'pizza_size_id' => 1,
            'pizza_size_price' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 1,
            'pizza_size_id' => 2,
            'pizza_size_price' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 1,
            'pizza_size_id' => 3,
            'pizza_size_price' => 14,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 2,
            'pizza_size_id' => 1,
            'pizza_size_price' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 2,
            'pizza_size_id' => 2,
            'pizza_size_price' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 2,
            'pizza_size_id' => 3,
            'pizza_size_price' => 24,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 3,
            'pizza_size_id' => 1,
            'pizza_size_price' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 3,
            'pizza_size_id' => 2,
            'pizza_size_price' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 3,
            'pizza_size_id' => 3,
            'pizza_size_price' => 14,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 4,
            'pizza_size_id' => 1,
            'pizza_size_price' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 4,
            'pizza_size_id' => 2,
            'pizza_size_price' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas_pizza_sizes')->insert([
            'pizza_id' => 4,
            'pizza_size_id' => 3,
            'pizza_size_price' => 24,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
