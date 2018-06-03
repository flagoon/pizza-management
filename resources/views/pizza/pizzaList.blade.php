@extends('layouts.app')
@section('admin-content')
    @include('success.show')
    <div class="col-12 mb-2">
        <a href="{{ route('pizza.create') }}">
            <button class="btn btn-primary"><i class="fa fa-plus"></i> Add new</button>
        </a>
    </div>
    <div class="col-12">
        <h1>Pizzas</h1>
        <table class="table table-borderless">
                <thead class="border-bottom">
                <tr>
                    <th rowspan="2">Pizza name</th>
                    <th rowspan="2">Pizza description</th>
                    <th colspan="{{ $pizzas[0]->pizzaSizes->count() }}">Prices</th>
                    <th rowspan="2"></th>
                    <th rowspan="2"></th>
                </tr>
                <tr>
                    @foreach($pizzas[0]->pizzaSizes as $size)
                        <th class="text-center">{{ $size->size_name }}</th>
                    @endforeach
                </tr>
                </thead>
            <tbody>
            @foreach($pizzas->sortByDesc('category_id')->groupBy('category_id') as $sortedPizzas)
                <tr>
                    <td colspan="7">
                        <h5 class="alert alert-primary">
                            🍕🍕🍕 Category: {{ $sortedPizzas[0]->category->category_name }}
                        </h5>
                    </td>
                </tr>
                @foreach($sortedPizzas as $pizza)
                    <tr>
                        <td>
                            <div class="container-fluid row col-12">
                                <div class="d-block col-8">{{ $pizza->pizza_name }}</div>
                                <div class="col-4">
                                    @for($i = 0; $i < $pizza->pizza_spiciness; $i++)
                                        <span class="text-danger">🍕</span>
                                    @endfor
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ $pizza->pizza_description }}
                        </td>
                        @foreach($pizza->pizzaSizes as $size)
                            <td class="text-center">{{ $size->pivot->pizza_size_price }}</td>
                        @endforeach
                        <td>
                            <a href="{{ route('pizza.edit', [ 'id' => $pizza->id ]) }}">
                                <button class="btn btn-success w-100 mt-1">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('pizza.destroy', [ 'id' => $pizza->id ]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger w-100 mt-1">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <td colspan="7">
                            @foreach($pizza->ingredients as $ingredient)
                                <span class="p-2">
                                    <i class="fa fa-crosshairs text-success"></i> {{ $ingredient->ingredient_name }},
                                </span>
                            @endforeach
                        </td>
                    </tr>
                @endforeach

            @endforeach
            </tbody>
        </table>
    </div>
@endsection