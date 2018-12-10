@extends('student_layout')
@section('content')

    @include('flash')

    <form class="form-inline" action="{{ route('store.with.teacher') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            Enter Code:
            <input type="text" class="form-control" name="initial" id="email">
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>

@endsection