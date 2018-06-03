@if($errors)
    @foreach ($errors->all() as $error)
        <div class="col-12">
            <div class="alert alert-danger alert-dismissible fade show">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endforeach
@endif