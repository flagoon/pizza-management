@extends('layouts.app')

@section('admin-content')

    <div class="col-12">
        <a href="{{ route('ingredients.create') }}">
            <button class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Add new</button>
        </a>
            <table class="table">
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
                            <th class="text-center">{{ $size->size_name }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($ingredients->sortBy('ingredient_name') as $ingredient)
                        <tr>
                            <td>{{ $ingredient->ingredient_name }}</td>
                            <td>{{ $ingredient->ingredient_description }}</td>
                                @foreach($ingredient->pizzaSizes as $pizzaSize)
                                    <td class="text-center">
                                        {{ $pizzaSize->pivot->ingredient_size_price }}
                                    </td>
                                @endforeach
                            <td class="p-0">
                                <a href="{{ route('ingredients.edit', [ 'id' => $ingredient->id ]) }}">
                                    <button class="btn btn-success w-100 mt-1">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </a>
                            </td>
                            <td class="p-0">
                                <form action="{{ route('ingredients.destroy', [ 'id' => $ingredient->id ]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger w-100 mt-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection