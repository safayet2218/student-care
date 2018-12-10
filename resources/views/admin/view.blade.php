@extends('layout')
@section('content')


        
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Student Details</h2>
                  <img src="{{URL::to($student_view_details->student_image)}}"  style="height: 47px;width: 47px">
                  <p class="name">Name:{{$student_view_details->student_name}}</p>
                  <p class="designation">- {{$student_view_details->student_department}} -</p>
                  
                  <a class="number" href="#">01751554502</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>Father name:</p><p>{{$student_view_details->student_fathername}}</p></li>
                    <li><p>Mother name:</p><p>{{$student_view_details->student_mothername}}</p></li>
                     <li><p>Email</p><p>{{$student_view_details->student_email}}</p></li>
                    
                   
                  </ul>
                 
                   <ul class="achivements">
                     <li><p>Address</p><p>{{$student_view_details->student_address}}</p></li>
                      <li><p>Year</p><p>{{$student_view_details->student_year}}</p></li>
                   </ul>

              <div class="info-links">
                    <a class="website" 
                     href="{{URL::to('/student_result_show/'.$student_view_details->student_roll)}}">
                      <i class="icon-globe icon"></i>
                      <span>Result</span>
                    </a>
                     </div>

                </div>
              </div>
            </div>


         
          </div>
       
		
		



@endsection