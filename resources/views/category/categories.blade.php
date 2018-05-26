@extends('layouts.app')

@section('admin-content')
    <div class="col-12">
        <h1>
            Categories!!
        </h1>
        @foreach($categories as $category)
            <a href="{{ route('categories.edit', ['id' => $category->id]) }}">
                <button class="btn btn-default">{{ $category->category_name }}
                    <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="button btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>

                </button>
            </a>

        @endforeach
    </div>
    <div class="col-12 mt-4">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="group-form row">
                <label for="category_name" class="col-2 mt-2">Category name</label>
                <input type="text" class="form-control col-6" id="category_name" name="category_name">
            </div>
            <div class="group-form row mt-2">
                <label for="category_description" class="col-2 mt-2">Category description</label>
                <textarea class="form-control col-6" id="category_description" name="category_description"></textarea>
            </div>
            <div class="group-form row mt-2">
                <label for="category_icon" class="col-2 mt-2">Category icon</label>
                <input type="file" class="col-6" id="category_icon" name="category_icon" multiple>
            </div>
            @include('errors.form-error')
            <div class="group-form mt-2">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection