@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <h1>Edit the category</h1>
        <div class="col-12">
            <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST">
                @csrf
                <div class="group-form row">
                    <label for="category_name" class="col-2 mt-2">Category name</label>
                    <input type="text" value="{{ $category->category_name }}" class="form-control col-6" id="category_name" name="category_name">
                </div>
                <div class="group-form row mt-2">
                    <label for="category_description" class="col-2 mt-2">Category description</label>
                    <textarea class="form-control col-6" id="category_description" name="category_description">{{ $category->category_description }}</textarea>
                </div>
                <div class="group-form row mt-2">
                    <label for="category_icon" class="col-2 mt-2">Category icon</label>
                    <input accept=".jpg, .jpeg, .png" type="file" class="col-6" id="category_icon" name="category_icon">
                </div>
                <div class="group-form mt-2">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection