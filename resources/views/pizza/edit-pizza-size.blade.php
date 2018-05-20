@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <form action="/pizza-sizes/{{ $pizzaSize->size_name }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="size-name">Size name:</label>
                <input type="text" class="form-control" id="size-name" name="size-name" value="{{ $pizzaSize->size_name }}">
            </div>
            <div class="form-group">
                <label for="size-value">Size value:</label>
                <input type="text" class="form-control" id="size-value" name="size-value" value="{{ $pizzaSize->size_value }}">
            </div>
            <div class="form-group">
                @include('errors.form-error')
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>

        </form>
    </div>
@endsection