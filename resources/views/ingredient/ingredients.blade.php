@extends('layouts.app')

@section('admin-content')
    <div class="col-8">
        <h1>Ingredients!!!!!!</h1>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @foreach($ingredients as $ingredient)
                        <h2 class="mb-0">{{ $ingredient->ingredient_name }}
                            <a href="#">
                                <i class="fa fa-pencil mx-1 text-success"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-trash text-danger"></i>
                            </a>
                        </h2>
                        <div>
                            {{ $ingredient->ingredient_description }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection