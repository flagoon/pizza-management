@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <form action="{{route('side-dish.store')}}" class="row" method="POST">
            <div class="form-group col-12 row">
                <label for="side_dish_name" class="col-3">Side dish name:</label>
                <input type="text" class="col-6 form-control">
                {{ $dishTypes }}
            </div>
        </form>
    </div>
@endsection