@extends('layout')
@section('content')

 <div class="card">
        <div class="card-body">
            <h2 class="card-title">Data table</h2>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                        <tr>
                            <th>St_name</th>
                            <th>St_Roll</th>
                            <th>St_Semester</th>
                            <th>St_Result</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($results as $re)
                            <tr>
                                <td>{{$re->student_name}}</td>
                                <td>{{$re->student_roll}}</td>
                                <td>{{$re->student_semester}}</td>
                                <td>{{$re->student_result}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection