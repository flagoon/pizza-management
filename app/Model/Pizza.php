<?php
declare(strict_types=1);

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pizza extends Model
{

    /**
     * Builds relation with Ingredient model
     *
     * @return BelongsToMany
     */
    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class, 'ingredients_pizzas');
    }


    /**
     * Builds relation with Category model
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Builds relation with PizzaSize model
     *
     * @return BelongsToMany
     */
    public function pizzaSizes(): BelongsToMany
    {
        return $this->belongsToMany(PizzaSize::class, 'pizzas_pizza_sizes')->withPivot('pizza_size_price');
    }
}
