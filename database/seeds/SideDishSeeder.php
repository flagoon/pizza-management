<?php

use Illuminate\Database\Seeder;

class SideDishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('side_dishes_types')->insert([
            'side_dish_type' => 'salad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dishes_types')->insert([
            'side_dish_type' => 'drink nonalcoholic',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dishes_types')->insert([
            'side_dish_type' => 'drink alcoholic',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dishes_types')->insert([
            'side_dish_type' => 'pasta',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dishes_types')->insert([
            'side_dish_type' => 'dessert',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
