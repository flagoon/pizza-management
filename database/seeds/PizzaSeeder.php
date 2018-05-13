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
            'pizza_spiciness' => 0
        ]);

        DB::table('pizzas')->insert([
            'pizza_name' => 'Vesuvio',
            'pizza_description' => 'meeeeeh',
            'pizza_spiciness' => 1
        ]);

        DB::table('pizzas')->insert([
            'pizza_name' => 'Pepperioni',
            'pizza_description' => 'może być',
            'pizza_spiciness' => 2
        ]);

        DB::table('pizzas')->insert([
            'pizza_name' => 'Fire in the pants',
            'pizza_description' => 'it killed before!',
            'pizza_spiciness' => 3
        ]);
    }
}
