@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <h1>Edit the category</h1>
        <div class="col-12">
            <form class="col-12" action="{{ route('categories.update', ['id' => $category->id]) }}">
                <div class="form-group col-12 row">
                    <label for="category_name" class="col-4 p-2">Category name:</label>
                    <input type="text"
                           id="category_name"
                           name="category_name"
                           class="form-control col-8"
                           value="{{ $category->category_name }}">
                </div>

            </form>
        </div>
    </div>
@endsection