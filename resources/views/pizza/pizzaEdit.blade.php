@extends('layouts.app')
@section('admin-content')
    @include('errors.form-error')
    <div class="col-12 mb-2">
        <h1>Add pizza</h1>
    </div>
    <div class="col-12">
        <form action="{{ route('pizza.update', [ 'id' => $pizza->id ]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row form-group col-12">
                <label
                        class="col-2 mt-2"
                        for="pizza_name">
                    Pizza name:
                </label>
                <input
                        type="text"
                        class="col-9 form-control"
                        name="pizza_name"
                        id="pizza_name"
                        value="{{ $pizza->pizza_name }}">
            </div>
            <div class="row form-group col-12">
                <label
                        class="col-2 mt-2"
                        for="pizza_description">
                    Pizza description:
                </label>
                <textarea
                        type="text"
                        class="col-9 form-control"
                        name="pizza_description"
                        id="pizza_description">{{ $pizza->pizza_description }}</textarea>
            </div>
            <div class="row form-group col-12">
                <label
                        class="col-2 mt-2"
                        for="pizza_spiciness">
                    Pizza spiciness:
                </label>
                <select class="col-2 form-control" name="pizza_spiciness" id="pizza_spiciness">
                    @for($spiciness = 0; $spiciness <= 3; $spiciness++)
                        <option value="{{ $spiciness }}"
                        @if($spiciness == $pizza->pizza_spiciness)
                            selected
                        @endif
                        >{{ $spiciness }}</option>
                    @endfor
                </select>
            </div>

            @foreach($pizza->pizzaSizes as $size)
                <div class="row form-group col-12">
                    <label
                            class="col-3 mt-2"
                            for="pizza_price[{{ $size->id }}]">
                        {{ title_case($size->size_name) }} pizza price:
                    </label>
                    <input
                            type="text"
                            class="col-1 form-control"
                            name="pizza_price[{{ $size->id }}]"
                            id="pizza_price[{{ $size->id }}]"
                            value="{{ $size->pivot->pizza_size_price }}">
                </div>
            @endforeach

            <div class="row form-group col-12">
                <label
                        class="col-2 mt-2"
                        for="pizza_category">
                    Pizza category:
                </label>
                <select
                        class="col-5 form-control"
                        name="pizza_category"
                        id="pizza_category">

                    @foreach($categories->sortBy('category_name') as $category)
                        <option value="{{ $category->id }}"

                                @if($category->id === $pizza->category->id)
                                    selected
                                @endif

                        >{{ $category->category_name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="row form-group col-12">

                @foreach($ingredients as $ingredient)
                    <label for="{{ $ingredient->id }}" class="form-check-label">
                        <div class="alert alert-primary m-1 form-check form-check-inline">
                            {{ $ingredient->ingredient_name }}
                            <input
                                    type="checkbox"
                                    class="ml-2 form-check-input"
                                    name="ingredients[]"
                                    id="{{ $ingredient->id }}"
                                    value="{{ $ingredient->id }}"
                                    @if($pizza->checkCorrectIngredients($ingredient->id))
                                        checked
                                    @endif
                            >
                        </div>
                    </label>
                @endforeach

            </div>
            <div class="col-12">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection