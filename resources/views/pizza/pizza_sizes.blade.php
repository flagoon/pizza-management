@extends('layouts.app')
@section('admin-content')
    <div class="col-12 row">
        <h1 class="col-12">Pizza sizes</h1>
        @foreach($pizza_sizes as $pizza_size)
            <div class="col-12 row mb-1">
                <div class="col-3">

                    <a href="/pizza-sizes/{{ $pizza_size->size_name }}/edit">
                        <button class="btn btn-default"> {{ $pizza_size->size_name }} {{ $pizza_size->size_value }} cm</button>
                    </a>
                </div>
                <div class="col-1">
                    <form action="/pizza-sizes/{{ $pizza_size->size_name }}" method="POST">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>

        @endforeach

        <div class="col-12 mt-4 p-4">
            <form action="{{ route('pizza-sizes.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="size_name" class="col-4">Size name:</label>
                    <input class="form-control col-8" id="size_name" name="size_name">
                </div>
                <div class="form-group row">
                    <label for="size_value" class="col-4">Size value:</label>
                    <input class="form-control col-8" id="size_value" name="size_value" type="number"/>
                </div>
                <div class="form-group">
                    @include('errors.form-error')
                </div>

                <div class="form-group row">
                    <button class="btn btn-primary offset-4" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection