<?php

use Illuminate\Database\Seeder;

class SideDishTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('side_dish_types')->insert([
            'side_dish_type' => 'salad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_type' => 'drink nonalcoholic',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_type' => 'drink alcoholic',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_type' => 'pasta',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_type' => 'dessert',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_type' => 'other',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
