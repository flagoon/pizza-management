<?php
declare(strict_types=1);

namespace App\Model;

use App\Http\Requests\CategoryRequest;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function prepareTitle(CategoryRequest $category): string
    {
        $fileName = str_replace(' ', '-', $category->category_name);
        $fileName .= '.' . $category->category_icon->getClientOriginalExtension();
        return $fileName;
    }
}
