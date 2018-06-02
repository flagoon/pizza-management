@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <h1>Pizzas</h1>
        <table class="table table-borderless">
                <thead class="border-bottom">
                <tr>
                    <th rowspan="2">Pizza name</th>
                    <th rowspan="2">Pizza description</th>
                    <th colspan="{{ $pizzaSizes->count() }}">Prices</th>
                    <th rowspan="2"></th>
                    <th rowspan="2"></th>
                </tr>
                <tr>
                    @foreach($pizzaSizes as $size)
                        <th class="text-center">{{ $size->size_name }}</th>
                    @endforeach
                </tr>
                </thead>
            <tbody>
            @foreach($pizzas as $pizza)
            <tr>
                <td>
                    <div class="container-fluid row col-12">
                        <div class="d-block col-8">{{ $pizza->pizza_name }}</div>
                        <div class="col-4">
                            @for($i = 0; $i < $pizza->pizza_spiciness; $i++)
                                <i class="fa fa-heart text-danger ml-auto"></i>
                            @endfor
                        </div>
                    </div>
                </td>
                <td>
                    {{ $pizza->pizza_description }}
                </td>
                <td class="text-center">15</td>
                <td class="text-center">20</td>
                <td class="text-center">30</td>
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
                            <button class="btn btn-warning">
                                {{ $ingredient->ingredient_name }}
                            </button>
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection