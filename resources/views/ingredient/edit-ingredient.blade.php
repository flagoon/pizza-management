@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <form action="{{ route('ingredients') }}" method="POST" class="row">
            {{ method_field('put') }}
            @csrf
            <div class="form-group col-12">
                <label for="ingredient_name" class="col-4">Ingredient name: </label>
                <input type="text" class="form-control col-8" name="ingredient_name" id="ingredient_name" value="{{ $ingredient->ingredient_name }}">
            </div>
            <div class="form-group col-12">
                <label for="ingredient_description" class="col-4">Ingredient description: </label>
                <textarea class="form-control col-8" name="ingredient_name" id="ingredient_name"></textarea>
            </div>
            <div class="form-group col-12">
                <button class="btn btn-primary col-3" type="submit">Submit</button>
            </div>

        </form>
    </div>

@endsection