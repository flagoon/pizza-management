@extends('layouts.app')

@section('admin-content')

    <div class="col-12">
        <h2>Ingredients list</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">Ingredient name</th>
                        <th rowspan="2">Ingredient description</th>
                        <th colspan="{{ $sizes->count() }}">Prices</th>
                        <th rowspan="2"></th>
                        <th rowspan="2"></th>
                    </tr>
                    <tr>
                        @foreach($sizes as $size)
                            <th>{{ $size->size_name }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($ingredients as $ingredient)
                        <tr>
                            <td>{{ $ingredient->ingredient_name }}</td>
                            <td>{{ $ingredient->ingredient_description }}</td>
                            {{-- TODO: show empty fields --}}
                            @foreach($ingredient->pizzaSizes as $pizzaSize)
                            <td>
                                {{ $pizzaSize->pivot->ingredient_size_price or '=' }}
                            </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection