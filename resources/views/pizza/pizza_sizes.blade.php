@extends('layouts.app')
@section('admin-content')
    <div class="col-12 row">
        <h1 class="col-12">Pizza sizes</h1>
        @foreach($pizza_sizes as $pizza_size)
            <div class="col-12 row mb-1">
                <div class="col-3">

                    <a href="/pizza_sizes/{{ $pizza_size->id }}">
                        <button class="btn btn-default"> {{ $pizza_size->size_name }} {{ $pizza_size->size_value }} cm</button>
                    </a>
                </div>
                <div class="col-1">
                    <form action="/pizza_sizes/{{ $pizza_size->id }}" method="POST">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>

        @endforeach
    </div>
@endsection