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
                          <th>T_name</th>
                          <th>T_Email</th>
                          <th>T_Image</th>
                          <th>T_phone</th>
                          <th>St_Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>

                     @foreach($all_teacher_info as $v_teacher)
                    <tbody> 
                      <tr>
                          <td>{{$v_teacher->teacher_Name}}</td>
                          <td>{{$v_teacher->teacher_email}}</td>
                          <td class="center"><img src="{{URL::to($v_teacher->teacher_image)}}" 
                          style="height: 47px;width: 47px"></td>
                          <td>{{$v_teacher->teacher_phone}}</td>
                          <td>{{$v_teacher->teacher_department}}</td>
                         
                          <td>
                            <a href="">
                            <button class="btn btn-outline-primary">View</button></a>

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