<?php

use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            'pizza_name' => 'Margherita',
            'pizza_description' => 'taka sobie pizza',
            'pizza_spiciness' => 0,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas')->insert([
            'pizza_name' => 'Vesuvio',
            'pizza_description' => 'meeeeeh',
            'pizza_spiciness' => 1,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas')->insert([
            'pizza_name' => 'Pepperioni',
            'pizza_description' => 'może być',
            'pizza_spiciness' => 2,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizzas')->insert([
            'pizza_name' => 'Fire in the pants',
            'pizza_description' => 'it killed before!',
            'pizza_spiciness' => 3,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
