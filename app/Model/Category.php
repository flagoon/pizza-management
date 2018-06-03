<?php
declare(strict_types=1);

namespace App\Model;

use App\Http\Requests\CategoryRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $fillable = [
        'category_name', 'category_icon', 'category_description'
    ];

    // Builds relation with pizza model.
    public function pizzas()
    {
        return $this->hasMany(Pizza::class);
    }

    /**
     * Checks if updated category has an image and deletes it.
     *
     * @param Category $category
     */
    public static function deleteImageIfAvailable(Category $category): void
    {
        if ($category->category_icon) {
            Storage::disk('public')->delete($category->category_icon);
        }
    }

    /**
     * Checks if there was a file send in request and saves it. Returns file name.
     *
     * @param CategoryRequest $newCategory
     * @return string $fileName
     */
    public static function saveFileIfAvailable(CategoryRequest $newCategory): ?string
    {
        $fileName = null;

        if ($newCategory->category_icon) {
            $fileName = Storage::disk('public')->putFile('category', $newCategory->category_icon);
        }

        return $fileName;
    }
}
