<?php

use Illuminate\Database\Seeder;

class PizzaSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizza_sizes')->insert([
            'size_name' => 'small',
            'size_value' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizza_sizes')->insert([
            'size_name' => 'medium',
            'size_value' => 30,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pizza_sizes')->insert([
            'size_name' => 'large',
            'size_value' => 40,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
