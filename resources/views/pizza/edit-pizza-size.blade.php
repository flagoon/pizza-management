@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <form action="{{ route('pizza-sizes.update', ['id' => $pizzaSize->size_name]) }}" method="POST">
            @csrf
            @method('put')
            {{-- Just stop and think! That's all you need. --}}
            <input type="text" id="old_name" name="old_name" hidden value="{{ $pizzaSize->size_name }}">
            <div class="form-group">
                <label for="size_name">Size name:</label>
                <input type="text" class="form-control" id="size_name" name="size_name" value="{{ $pizzaSize->size_name }}">
            </div>
            <div class="form-group">
                <label for="size_value">Size value:</label>
                <input type="text" class="form-control" id="size_value" name="size_value" value="{{ $pizzaSize->size_value }}">
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