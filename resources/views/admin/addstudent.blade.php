<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher student communction system</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
#center{
	text-align: center;
}
#p{
	text-align: center;
    font-size: 200%;
}
</style>


</head>
<body>


			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<div id="p">
					<i class="icon-edit"></i>
					<p >Student's Registration Form</p>
				</div>
			</ul>


			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="breadcrumb" data-original-title>
						<div id="center">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Student</h2>
						</div>
					</div>
				
			



					<form class="form-horizontal" action="{{url('/save-student')}}" method="post"
                     enctype="multipart/form-data">


						{{ csrf_field() }}

						  <fieldset>
							<div class="form-group">
							  <label  class="control-label col-sm-2" for="date01">Student Name</label>
							  <div class="col-sm-8">
								<input type="text" class="form-control" name="student_name" >
							  </div>
							</div>



							<div class="form-group">
							  <label class="control-label col-sm-2" for="date01">Student Roll</label>
							 <div class="col-sm-8">
								<input type="text"  class="form-control" name="student_roll" >
							  </div>
							</div>


							<div class="form-group">
							  <label class="control-label col-sm-2" for="date01">Student FatherName</label>
							  <div class="col-sm-8">
								<input type="text"  class="form-control" name="student_fathername" >
							  </div>
							</div>





							<div class="form-group">
							  <label class="control-label col-sm-2" for="date01">Student MotherName</label>
							  <div class="col-sm-8">
								<input type="text"  class="form-control" name="student_mothername" >
							  </div>
							</div>


							


							<div class="form-group">
							  <label class="control-label col-sm-2" for="date01">Student Email</label>
							  <div class="col-sm-8">
								<input type="text"  class="form-control" name="student_email" >
							  </div>
							</div>

							<div class="form-group">
							  <label class="control-label col-sm-2" for="date01">Student Password</label>
							  <div class="col-sm-8">
								<input type="Password"  class="form-control" name="student_password" >
							  </div>
							</div>

							<div class="form-group">
							  <label class="control-label col-sm-2" for="date01">Student Address</label>
							 <div class="col-sm-8">
								<input type="text" c class="form-control" name="student_address" >
							  </div>
							</div>


							<div class="form-group">
							  <label class="control-label col-sm-2" for="date01">Student Year</label>
							 <div class="col-sm-8">
								<input type="text"  class="form-control" name="student_year" >
							  </div>
							</div>



							<div class="form-group">
							      <label  class="control-label col-sm-2" for="sel1">Student Department:</label>
							      <select  id="sel1" name="student_department">
							        <option>CSE</option>
							        <option>EEE</option>
							        <option>BBA</option>
							        <option>ECE</option>
							      </select>
							</div>

							


							<div class="form-group">
							  <label class="control-label col-sm-2" for="fileInput">image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="student_image" 
								id="fileInput" type="file">
							  </div>
							</div> 



							



							


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary btn-block enter-btn">Add Student</button>
							 
							</div>
						  </fieldset>
						</form> 

</div>

</div>
</div>

</body>
</html>

