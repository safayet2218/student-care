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
                            <th>Semester</th>
                            <th>Reason</th>
                            <th>Action</th>
                            <th>Date</th>
                            <th>Subject</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($counsellings as $counselling)
                            <tr>
                                <td>{{$counselling->student_name}}</td>
                                <td>{{$counselling->student_roll}}</td>
                                <td>{{$counselling->semester}}</td>
                                <td>{{$counselling->reason}}</td>
                                <td>{{$counselling->action}}</td>
                                <td>{{$counselling->date}}</td>
                                <td>{{$counselling->subject}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection