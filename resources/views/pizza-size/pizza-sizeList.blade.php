@extends('layouts.app')
@section('admin-content')
    <div class="col-12">
        <a href="{{ route('pizza-sizes.create') }}">
            <button class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Add new</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Pizza size</th>
                    <th class="text-center">Width</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pizzaSizes->sortBy('size_value') as $pizzaSize)
                <tr>
                    <td class="text-center">{{ $pizzaSize->size_name }}</td>
                    <td class="text-center">{{ $pizzaSize->size_value }}</td>
                    <td class="text-center" style="width: 1rem">
                        <a href="{{ route('pizza-sizes.edit', [ 'id' => $pizzaSize->id ]) }}">
                            <button class="btn btn-success">
                                <i class="fa fa-trash"></i>
                            </button>
                        </a>
                    </td>
                    <td class="text-center" style="width: 1rem">
                        <form action="{{ route('pizza-sizes.destroy', [ 'id' => $pizzaSize->id ]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
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
