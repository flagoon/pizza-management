@extends('layouts.app')

@section('admin-content')
    <div class="col-12">
        <h1>
            Categories!!
        </h1>
        @foreach($categories as $category)
            <a href="{{ route('categories.edit', ['id' => $category->id]) }}">
                <button class="btn btn-default">{{ $category->category_name }}
                    <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="button btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>

                </button>
            </a>

        @endforeach
    </div>
@endsection