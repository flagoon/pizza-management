<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display all categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all()->sortBy('category_name');
        return view('category.categories', ['categories' => $categories]);
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  CategoryRequest $category
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $category)
    {
        $path = null;
        if ($category->category_icon) {
            $path = Storage::disk('public')->putFile('category', $category->category_icon);
        }

        DB::table('categories')->insert([
            'category_name' => $category->category_name,
            'category_description' => $category->category_description,
            'category_icon' => $path,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Returns category for User category.
     *
     * @param  Category  $category
     * @return Category
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Category  $category
     * @param  CategoryRequest  $newCategory
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $newCategory, Category $category)
    {
        Category::deleteImageIfAvailable($category);

        $path = Category::saveFileIfAvailable($newCategory);
        if (!$path) {
            $path = $category->category_icon;
        }

        $category->update([
            'category_name' => $newCategory->category_name,
            'category_icon' => $path,
            'category_description' => $newCategory->category_description
        ]);

        return redirect()->route('categories.edit', ['id' => $category->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->category_icon) {
            Storage::disk('public')->delete($category->category_icon);
        }

        try {
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()->route('categories.index')->withErrors([
                'error.exception' => $exception
            ]);
        }

        return redirect()->route('categories.index');
    }

    public function deleteIcon(Request $request)
    {
        return $request;
    }
}
