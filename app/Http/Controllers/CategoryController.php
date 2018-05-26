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
        $fileName = null;
        if ($category->category_icon) {
            $fileName = Category::prepareTitle($category);
            Storage::disk('public')->putFileAs('category', $category->category_icon, $fileName);
        }

        DB::table('categories')->insert([
            'category_name' => $category->category_name,
            'category_description' => $category->category_description,
            'category_icon' => $fileName,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $newCategory, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->category_icon) {
            Storage::disk('public')->delete('category/' . $category->category_icon);
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
