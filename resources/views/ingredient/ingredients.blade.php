@extends('layouts.app')

@section('admin-content')
    <div class="col-8">
        <h2>Ingredients!!!!!!</h2>
        <ul>
            @foreach($ingredients as $ingredient)
                <li>{{ $ingredient->ingredient_name }} - {{ $ingredient->ingredient_description }}</li>
            @endforeach
        </ul>
    </div>
@endsection