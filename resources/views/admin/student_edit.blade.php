
@extends('layout')
@section('content')







			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-edit"></i>
					<a href="#">Student Info Update</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Student</h2>
					</div>

			<form class="form-horizontal" action="{{url('/update-student',$student_view_details->student_id)}}" method="post"
                  enctype="multipart/form-data">


						{{ csrf_field() }}

						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Student Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="student_name"
								value="{{($student_view_details->student_name)}}" 
								 >
							  </div>
							</div>



							<div class="control-group">
							  <label class="control-label" for="date01">Student Roll</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="student_roll"
								value="{{($student_view_details->student_roll)}}" >
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01">Student FatherName</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="student_fathername"
								value="{{($student_view_details->student_fathername)}}" >
							  </div>
							</div>





							<div class="control-group">
							  <label class="control-label" for="date01">Student MotherName</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="student_mothername" 
								value="{{($student_view_details->student_mothername)}}">
							  </div>
							</div>


							


								<div class="control-group">
							  <label class="control-label" for="date01">Student Email</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="student_email" 
								value="{{($student_view_details->student_email)}}">
							  </div>
							</div>

	

								<div class="control-group">
							  <label class="control-label" for="date01">Student Address</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="student_address" 
								value="{{($student_view_details->student_address)}}">
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01">Student Year</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="student_year"
								value="{{($student_view_details->student_year)}}" >
							  </div>
							</div>



							<div class="form-group">
							      <label for="sel1">Student Department:</label>
							      <select class="form-control" id="sel1" name="student_department"
							      value="{{($student_view_details->student_department)}}">
							        <option>CSE</option>
							        <option>EEE</option>
							        <option>BBA</option>
							        <option>ECE</option>
							      </select>
							</div>

							




							



							


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">UPDATE Student</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form> 

</div>

</div>
</div>

@endsection

