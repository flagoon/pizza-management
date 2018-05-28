@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <form action="{{ route('side-dish-type.update', ['id' => $sideDishType->id]) }}" class="row" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-12 row">
                <label for="side_dish_type_name" class="col-3 mt-2">Type name:</label>
                <input type="text" class="form-control col-6" id="side_dish_type_name" name="side_dish_type_name" value="{{ $sideDishType->side_dish_type_name }}">
            </div>
            @include('errors.form-error')
            <div class="form-group col-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection