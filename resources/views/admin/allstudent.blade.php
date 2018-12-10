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
                            <th>St_Image</th>
                            <th>St_Address</th>
                            <th>St_Department</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($students as $v_student)
                            <tr>
                                <td>{{$v_student->student_name}}</td>
                                <td>{{$v_student->student_roll}}</td>
                                <td class="center"><img src="{{URL::to($v_student->student_image)}}"
                                                        style="height: 80px;width: 80px"></td>
                                <td>{{$v_student->student_address}}</td>
                                <td>{{$v_student->student_department}}</td>

                                <td>
                                    <a href="{{URL::to('/view/'.$v_student->student_id)}}">
                                        <button class="btn btn-outline-primary">View</button>
                                    </a>

                                    <a href="{{URL::to('/edit_student/'.$v_student->student_id)}}">
                                        <button class="btn btn-outline-danger">Edit</button>
                                    </a>

                                    <a href="{{URL::to('/delete_student/'.$v_student->student_id)}}">
                                        <button class="btn btn-outline-warning">Delete</button>
                                    </a>

                                    <a href="{{ route('all.counselling.student', $v_student->student_roll) }}">
                                        <button class="btn btn-outline-warning">Counselling</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection