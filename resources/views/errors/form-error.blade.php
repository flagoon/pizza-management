@if($errors)
    @foreach ($errors->all() as $error)
        <div class="offset-4 text-danger">{{ $error }}</div>
    @endforeach
@endif