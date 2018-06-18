@extends('layouts.app')

@section('admin-content')
    @include('success.show')
    <div class="col-8">
        <a href="{{ route('categories.create') }}">
            <button class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Add new</button>
        </a>
        @if($categories->count() !==0)
            <table class="table table-borderless">
                @foreach($categories as $category)
                    <tr>
                        <td style="width: 1rem;">
                            <img
                                    class="thumbnail border"
                                    style="width: 3rem"
                                    src="{{ $category->category_icon ? asset('storage/' . $category->category_icon) : 'storage/no-pic.jpg'}}"
                                    alt="Category icon" />
                        </td>
                        <td>{{ $category->category_name }}</td>
                        <td style="width: 1rem">
                            <a href="{{ route('categories.edit', [ 'id' => $category->id ]) }}">
                                <button class="btn btn-success">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </a>
                        </td>
                        <td class="text-center" style="width: 1rem">
                            @if($category->category_name === 'other')
                                <button class="btn btn-default" disabled>
                                    <i class="fa fa-trash"></i>
                                </button>
                            @else
                                <form action="{{ route('categories.destroy', [ 'id' => $category->id ]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <td colspan="4" style="font-size: 0.7rem">
                            Description: <span class="text-primary">{{ $category->category_description or "no description"  }}</span>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <h2>nocategories</h2>
        @endif
    </div>
@endsection