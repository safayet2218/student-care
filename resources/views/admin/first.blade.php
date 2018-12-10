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
  body {background-color: #ff531a;}

  h1{color: #9900cc;
      text-align: center;
      font-family: verdana;
      font-size: 300%;}
  #teacher{
    margin-top: 80px;
    font-size: 200%;
    color: blue;
    border: 1px solid;
    border-radius: 25px;
    padding: 5px;
    text-align: center;
    background-color: #ffffff;
    font-weight: bold;
  }
  #student{
     margin-top: 80px;
    font-size: 200%;
    color: blue;
    border: 1px solid;
    border-radius: 25px;
    margin-right: 60px;
    margin-left: 450PX;
    padding: 5px;
    text-align: center;
    background-color: #ffffff;
    font-weight: bold;
  }

  .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:black;
    color: white;
    text-align: center;
    padding: 15px;

</style>
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Registration
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{URL::to('/addteacher')}}">Teacher</a></li>
          <li><a href="{{URL::to('/addstudent')}}">Student</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<!-- button -->

<div class="container">
  <h1>Teacher Student Communction system</h1>
</div>

<div class="col-lg-12">
    <div class="row">
        <div class="col-xs-4">
            
        </div>
        <div class="col-xs-4" id="teacher">
              <a class="dropdown-toggle"  href="{{URL::to('/admin')}}">TEACHER LOGIN
         </a>
        </div>
        <div class="col-xs-4" id="student">
             <a class="dropdown-toggle"  href="{{URL::to('/student')}}">STUDENT LOGIN
        </a>
        </div>
    </div>
</div>

<div class="footer">
  <p>Copyright &copy;Gloaming soft </p>
</div>

  


</body>
</html>
