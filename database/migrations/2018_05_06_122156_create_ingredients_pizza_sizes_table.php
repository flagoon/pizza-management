<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsPizzaSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_pizza_sizes', function (Blueprint $table) {
            $table->integer('ingredient_id');
            $table->integer('pizza_size_size_name');
            $table->integer('ingredient_size_price');
            $table->integer('ingredient_size_price');
            $table->integer('ingredient_size_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients_pizza_sizes');
    }
}
