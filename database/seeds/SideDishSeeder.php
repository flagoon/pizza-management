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
        DB::table('side_dishes')->insert([
            'side_dish_type_id' => 6,
            'side_dish_name' => 'garlic souce',
            'side_dish_description' => 'freshly made',
            'side_dish_volume' => '100ml',
            'side_dish_price' => 300,
            'created_at' => now(),
            'updated_at' => now()
            ]);

        DB::table('side_dishes')->insert([
            'side_dish_type_id' => 6,
            'side_dish_name' => 'tabasco souce',
            'side_dish_description' => 'hot shit',
            'side_dish_volume' => '100ml',
            'side_dish_price' => 300,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dishes')->insert([
            'side_dish_type_id' => 6,
            'side_dish_name' => 'garlic bread',
            'side_dish_description' => 'tasty',
            'side_dish_volume' => null,
            'side_dish_price' => 899,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dishes')->insert([
            'side_dish_type_id' => 3,
            'side_dish_name' => 'pepsi',
            'side_dish_description' => 'sorry, no coca-cola',
            'side_dish_volume' => '0.5l',
            'side_dish_price' => 450,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dishes')->insert([
            'side_dish_type_id' => 3,
            'side_dish_name' => 'pepsi',
            'side_dish_description' => 'for thirsty one',
            'side_dish_volume' => '1l',
            'side_dish_price' => 999,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('side_dishes')->insert([
            'side_dish_type_id' => 1,
            'side_dish_name' => 'greek salad',
            'side_dish_description' => 'sorry it\'s not pizza',
            'side_dish_volume' => '300g',
            'side_dish_price' => 1300,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

}
