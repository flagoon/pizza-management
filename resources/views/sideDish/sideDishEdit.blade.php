@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        {{ $sideDish->id }}
        <h2>Add side dish</h2>
        <form action="{{ route('side-dish.update', ['id' => $sideDish->id]) }}" class="row" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-12 row">
                <label for="side_dish_name" class="col-3 mt-2">Side dish name:</label>
                <input type="text" id="side_dish_name" value="{{ $sideDish->side_dish_name }}" name="side_dish_name" class="col-6 form-control">
            </div>
            <div class="form-group col-12 row">
                <label for="side_dish_type_id" class="col-3 mt-2">Side dish type:</label>
                <select class="form-control col-6" id="side_dish_type_id" name="side_dish_type_id">
                    @foreach($dishTypes as $dishType)
                        <option value="{{ $dishType->id }}"
                        @if($dishType->side_dish_type_name == $sideDish->side_dish_type_name)
                            selected="selected"
                        @endif
                        >{{ $dishType->side_dish_type_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-12 row">
                <label for="side_dish_volume" class="col-3 mt-2">Side dish volume:</label>
                <input type="text" id="side_dish_volume" value="{{ $sideDish->side_dish_volume }}" name="side_dish_volume" class="col-6 form-control">
            </div>
            <div class="form-group col-12 row">
                <label for="side_dish_description" class="col-3 mt-2">Side dish description:</label>
                <textarea type="text" id="side_dish_description" name="side_dish_description" class="col-6 form-control">{{ $sideDish->side_dish_description }}</textarea>
            </div>
            <div class="form-group col-12 row">
                <label for="side_dish_price" class="col-3 mt-2">Side dish price:</label>
                <input type="text" id="side_dish_price" value="{{ $sideDish->side_dish_price }}" name="side_dish_price" class="col-6 form-control">
            </div>
            @include('errors.form-error')
            <div class="form-group col-12 row">
                <button class="btn btn-primary offset-8">Submit</button>
            </div>

        </form>
    </div>
@endsection