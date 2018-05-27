@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <a href="{{ route('side-dish.create') }}">
            <button class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Add new</button>
        </a>
        <table class="table">
            @foreach($sideDishCollection->sortBy('side_dish_type_id')->groupBy('side_dish_type_id') as $collection)
                <tr>
                    <td colspan="6">
                        <h3>
                            {{ $collection[0]->sideDishType->side_dish_name}}
                        </h3>
                    </td>
                </tr>
                <tr class="alert-primary">
                    <td>Name</td>
                    <td>Volume</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td></td>
                    <td></td>
                </tr>

                    @foreach($collection->sortBy('side_dish_name') as $dish)
                    <tr>
                        <td>
                            {{ $dish->side_dish_name }}
                        </td>
                        <td>
                            {{ $dish->side_dish_volume }}
                        </td>
                        <td>
                            {{ $dish->side_dish_description }}
                        </td>
                        <td>
                            {{ $dish->side_dish_price }}
                        </td>
                        <td>
                            <a href="{{ route('side-dish.edit', ['id' => $dish->id]) }}">
                                <button class="btn btn-success">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('side-dish.destroy', ['id' => $dish->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

            @endforeach
        </table>

    </div>

@endsection