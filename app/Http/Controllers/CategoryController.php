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
        return view('category.categoriesList', ['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.categoriesCreate');
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
            'category_icon' => $path
        ]);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Category ' . $category->category_name . ' created!');
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
        return view('category.categoriesEdit', ['category' => $category]);
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
        // if new request has new image, it will remove old one.
        if(isset($newCategory->category_icon)) {
            Category::deleteImageIfAvailable($category);
        }

        // new image will be save in folder and return path to it.
        $path = Category::saveFileIfAvailable($newCategory);
        if (!$path) {
            $path = $category->category_icon;
        }

        $category->update([
            'category_name' => $newCategory->category_name,
            'category_icon' => $path,
            'category_description' => $newCategory->category_description
        ]);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Category ' . $newCategory->category_name . ' was changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // when category is removed, all pizzas with that category will be assign 'other' category
        $category->pizzas()->update(['category_id' => 1]);

        // if category has icon, icon will be removed.
        if ($category->category_icon) {
            Storage::disk('public')
                ->delete($category->category_icon);
        }

        try {
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()
                ->route('categories.index')
                ->withErrors([
                'error.exception' => $exception
            ]);
        }

        return redirect()->route('categories.index');
    }

    // TODO: remove icon by clicking. Need to take care of CORS.
    public function deleteIcon(Request $request)
    {
        return $request;
    }
}
