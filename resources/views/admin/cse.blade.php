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

                     @foreach($cse_student_info as $v_student)
                    <tbody> 
                      <tr>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_roll}}</td>
                          <td class="center"><img src="{{URL::to($v_student->student_image)}}" 
                          style="height: 80px;width: 80px"></td>
                          <td>{{$v_student->student_address}}</td>
                          <td>{{$v_student->student_department}}</td>
                         
                          <td>
                           <a href="{{URL::to('/view/'.$v_student->student_id)}}"> <button class="btn btn-outline-primary">View</button></a>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button>
                          </td>
                      </tr>
                    </tbody>
                     @endforeach


                  </table>
                </div>
              </div>
            </div>
          </div>



@endsection