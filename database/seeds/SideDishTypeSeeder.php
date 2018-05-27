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
            'side_dish_name' => 'salad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_name' => 'drink nonalcoholic',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_name' => 'drink alcoholic',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_name' => 'pasta',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_name' => 'dessert',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_name' => 'other',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
