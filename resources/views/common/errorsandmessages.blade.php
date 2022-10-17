<br>
@if (count($errors) > 0)
    @if ($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ $error }}
            </div>
        @endforeach
    @endif
@endif

@if(session('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('message') }}
    </div>
@endif