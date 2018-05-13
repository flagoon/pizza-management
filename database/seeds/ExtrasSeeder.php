<?php

use Illuminate\Database\Seeder;

class ExtrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extras')->insert([
            'extra_name' => 'garlic souce',
            'extra_description' => 'freshly made',
            'extra_price' => 300,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('extras')->insert([
            'extra_name' => 'tabasco souce',
            'extra_description' => 'hot shit',
            'extra_price' => 300,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('extras')->insert([
            'extra_name' => 'garlic bread',
            'extra_description' => 'tasty',
            'extra_price' => 899,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('extras')->insert([
            'extra_name' => 'pepsi - 0.5l',
            'extra_description' => 'sorry, no coca-cola',
            'extra_price' => 450,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('extras')->insert([
            'extra_name' => 'pepsi - pitcher',
            'extra_description' => 'for thirsty one',
            'extra_price' => 999,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('extras')->insert([
            'extra_name' => 'greek salad',
            'extra_description' => 'sorry it\'s not pizza',
            'extra_price' => 1300,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
