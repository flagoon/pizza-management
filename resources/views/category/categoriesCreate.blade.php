@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <h1>Create the category</h1>
        <div class="col-12">
            <form class="col-12" action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-12 row">
                    <label for="category_name" class="col-4 p-2">Category name:</label>
                    <input type="text"
                           id="category_name"
                           name="category_name"
                           class="form-control col-8">
                </div>

                <div class="form-group col-12 row">
                    <label for="category_description" class="col-4 p-2">Category description:</label>
                    <textarea id="category_description"
                              name="category_description"
                              class="form-control col-8"></textarea>
                </div>
                <div class="form-group col-12 row">
                    <label for="category_icon" class="col-4 p-2">Category icon:</label>
                    <div class="col-8 row">
                        <img src="{{ asset('storage/no-pic.jpg') }}" class="categories-big"/>
                        <input type="file" class="mt-0" name="category_icon">
                    </div>
                </div>
                <div class="form-group">
                    @include('errors.form-error')
                </div>
                <div class="form-group col-12 row">
                    <button type="submit" class="btn btn-primary col-4 offset-8">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection