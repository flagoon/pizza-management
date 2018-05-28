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
            'side_dish_type_name' => 'salad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_type_name' => 'drink nonalcoholic',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_type_name' => 'drink alcoholic',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_type_name' => 'pasta',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_type_name' => 'dessert',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dish_types')->insert([
            'side_dish_type_name' => 'other',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
