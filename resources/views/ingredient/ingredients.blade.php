@extends('layouts.app')

@section('admin-content')
    <div class="col-8">
        <h1>Ingredients!!!!!!</h1>
        <div class="container">
            <div class="row">
                @foreach($ingredients as $ingredient)
                <div class="col-12 row">

                        <div class="mr-auto">
                            <h2 class="mb-0">{{ $ingredient->ingredient_name }}</h2>
                        </div>
                        <div class="col-1">
                            <a href="/ingredients/{{ $ingredient->id }}">
                                <button class="btn btn-success">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </a>
                        </div>
                    <div class="col-1">
                        <form action="/ingredients/{{ $ingredient->id }}" method="POST">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </div>
                        <div class="col-12">
                            {{ $ingredient->ingredient_description }}
                        </div>

                </div>
                @endforeach
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