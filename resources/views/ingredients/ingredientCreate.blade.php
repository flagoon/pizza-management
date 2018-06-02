@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <h1>Create new ingredients</h1>
        <form action="{{ route('ingredients.store') }}" method="POST" class="row container-fluid col-12">
            @csrf
            <div class="row form-group col-12">
                <label for="ingredient_name" class="col-3 mt-2">Ingredient name</label>
                <input type="text" id="ingredient_name" name="ingredient_name" class="col-8 form-control">
            </div>
            <div class="row form-group col-12">
                <label for="ingredient_description" class="col-3 mt-2">Ingredient description</label>
                <textarea id="ingredient_description" name="ingredient_description" class="col-8 form-control"></textarea>
            </div>
            <div class="row form-group col-12">
                <h3>Prices for sizes</h3>
                @foreach($pizzaSizes as $pizzaSize)
                <div class="col-12 form-group row">
                    <label for="size_{{ $pizzaSize->id }}" class="col-2 mt-2">
                        {{ $pizzaSize->size_name }}:
                    </label>
                    <input
                            type="text" name="size_{{ $pizzaSize->id }}"
                            id="size_{{ $pizzaSize->id }}"
                            class="col-2 form-control" value="0">
                </div>
                @endforeach
            </div>
            @include('errors.form-error')
            <div class="col-12">
                <button class="btn btn-primary col-4">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
