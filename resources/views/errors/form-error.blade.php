@if($errors)
    @foreach ($errors->all() as $error)
        <div class="col-12 text-danger text-center">{{ $error }}</div>
    @endforeach
@endif