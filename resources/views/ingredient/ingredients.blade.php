@extends('layouts.app')

@section('admin-content')
    <div class="col-8">
        <h1>Ingredients!!!!!!</h1>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @foreach($ingredients as $ingredient)
                        <h2 class="mb-0">{{ $ingredient->ingredient_name }}
                            <a href="/ingredients/{{ $ingredient->id }}">
                                <i class="fa fa-pencil mx-1 text-success"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-trash text-danger"></i>
                            </a>
                        </h2>
                        <div>
                            {{ $ingredient->ingredient_description }}
                        </div>
                    @endforeach
                </div>
                <div class="col-12 mt-4 p-4">
                    <form action="{{ route('add-ingredient') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="ingredient-name" class="col-4">Ingredient name:</label>
                            <input class="form-control col-8" id="ingredient-name" name="ingredient-name" required>
                        </div>
                        <div class="form-group row">
                            <label for="ingredient-description" class="col-4">Ingredient description:</label>
                            <textarea class="form-control col-8" id="ingredient-description" name="ingredient-description"></textarea>
                        </div>
                        <div class="form-group row">
                            <button class="btn btn-primary offset-4" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection