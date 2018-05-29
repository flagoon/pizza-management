<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(PizzaSizeSeeder::class);
         $this->call(PizzaSeeder::class);
         $this->call(IngredientsSeeder::class);
         $this->call(SideDishSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(SideDishTypeSeeder::class);
         $this->call(IngredinetPizzaSizeSeeder::class);
    }
}
