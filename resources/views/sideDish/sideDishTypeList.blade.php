@extends('layouts.app')
@section('admin-content')

    <div class="col-12">
        <h1>Side dish types</h1>
    </div>

    <div class="col-12">
        @foreach($sideDishTypes as $sideDishType)
            <a href="{{ route('side-dish-type.edit', ['id' => $sideDishType->id]) }}">
                <button class="btn btn-default">{{ $sideDishType->side_dish_type_name }}
                    <form action="{{ route('side-dish-type.destroy', ['id' => $sideDishType->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="button btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>

                </button>
            </a>
        @endforeach
    </div>
    <div class="col-12 mt-4">
        <form action="{{ route('side-dish-type.store') }}" class="col-12 row" method="POST">
            @csrf
            <div class="form-group col-12 row">
                <label for="type_name" class="col-3 mt-2">Type name:</label>
                <input type="text" class="form-control col-6" id="type_name" name="side_dish_type_name">
            </div>
            @include('errors.form-error')
            <div class="form-group col-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection