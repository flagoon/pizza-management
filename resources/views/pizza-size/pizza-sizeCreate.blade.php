@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <h2>Add new pizza size</h2>
        <form action="{{ route('pizza-sizes.store') }}" method="POST" class="col-12 row">
            @csrf
            <div class="col-6 row">
                <div class="form-group col-12 row">
                    <label for="size_name" class="col-12">Size name:</label>
                    <input type="text" class="form-control col-12" id="size_name" name="size_name">
                </div>
            </div>
            <div class="col-6 row">
                <div class="form-group col-12 row">
                    <label for="size_value" class="col-12">Size value:</label>
                    <input type="text" class="form-control col-12" id="size_value" name="size_value">
                </div>
            </div>
            @include('errors.form-error')
            <div class="form-group col-12 row">
                <button class="btn btn-primary col-3">Submit</button>
            </div>
        </form>
    </div>
@endsection