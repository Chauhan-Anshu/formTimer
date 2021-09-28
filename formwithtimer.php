<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://rencs.com/demo/jquery-captcha-basic/js/jquery.captcha.basic.min.js"></script>
  <script type="text/javascript" src="style.js"></script>
</head>
<body>
<div class="container">
  <div class="row centered-form">
    <h3 style="color:#FF0000" align="center">
        Your form will be Submitted in 3 Minutes: <span id='timer'></span>
    </h3>

<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
  <div class="panel panel-default">
    <div class="panel-body">
      <form id="userForm" method="POST" action="submit.php">
        
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Enter your Name">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
	      <div class="form-group">
	        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
	       </div>
	  </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <input type="date" name="dob" id="dob" class="form-control input-sm" placeholder="DOB">
            </div>
          </div>
      
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <textarea name="personalDetails" id="personalDetails" class="form-control input-sm" placeholder="Write about yourself"></textarea>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <p id="cerror"></p>
          </div>
          </div>
          
        <input type="submit" value="Register" class="btn btn-info btn-block">
      </form>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>
