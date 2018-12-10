@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </p>
@endif

@if(Session::has('success'))
    <p class="alert alert-warning">{{ Session::get('success') }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </p>
@endif


@if(Session::has('warning'))
    <p class="alert alert-success">{{ Session::get('warning') }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </p>
@endif