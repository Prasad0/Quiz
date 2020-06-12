<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link href="templates/Flatly.css" rel="stylesheet" />
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="Scripts/jquery-3.1.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="js/jquery-ui.css" rel="stylesheet" />

    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" />
    <link href="templates/Flatly.css" rel="stylesheet" />
		<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>
<style>
	body{
		margin:0;
		background:url('1.jpg');
		background-size:cover;
	}
	.container{
		background: transparent;
	}
	h2{
	   color: #008000;
	   font-size: 30px;
	}
</style>
	
	</head>
<body>
<br/><br/>
	<!--div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				
				  <a class="navbar-brand" href="#">ONLINE MOCK TEST</a>
				
			  </div>
			</nav>
			</div>
		</div>
	</div>-->


	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				
					<h1>Login Form</h1>
					
						<!--form action="login.php?q=index.php" method="post">
							<div class="form-group">
							  <label for="email">Email:</label>
							  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
							</div>
							<div class="form-group">
							  <label for="pwd">Password:</label>
							  <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form-->
						
						<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="login.php?q=index.php" method="post">
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Email </label>
				<input type="text" name="email" placeholder="Enter your email " required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-lock" aria-hidden="true"></i> password </label>
				<input type="password" name="password" placeholder="Enter your password " required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
				</div>
			</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //script ends here -->
			<div class="w3ls-bot">
				<div class="switch-agileits">
					<label class="switch">
						<input type="checkbox">
						<span class="slider round"></span>
						keep me signed in
					</label>
				</div>
				<div class="form-end">
					<input type="submit" value="LOGIN">
				</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	
					
			</div>
			<h1>Registration form</h1>
			<div class="col-sm-6">
					<div class="w3ls-login box box--big">
						
						<form method="post" action="sign_up.php">
							
							<div class="agile-field-txt">
							  <label for="name"><i class="fa fa-user" aria-hidden="true"></i>Name</label>
							  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
							</div>
							
							<div class="agile-field-txt">
							  <label  for="gender"><i class="fa fa-intersex" aria-hidden="true"></i>Gender</label>
							  
								<select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
							   <option value="Male">Select Gender</option>
							  <option value="M">Male</option>
							  <option value="F">Female</option> </select>
							</div>
							
							<div class="agile-field-txt">
								<label for="college"><i class="fa fa-university" aria-hidden="true"></i>College</label>  
									<input id="college" class="form-control" name="college" placeholder="Enter your college name" type="text">
							</div>
							
							<div class="agile-field-txt">
							  <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i>Email</label>
							  <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
							</div>
							
							<div class="agile-field-txt">
								<label for="mob"><i class="fa fa-address-book-o" aria-hidden="true"></i>Contacts</label>  
								<input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control" type="text">
							</div>

							<div class="agile-field-txt">
							  <label for="pwd"><i class="fa fa-lock" aria-hidden="true"></i>Password</label>
							  <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
							</div>
							
							
							<div class="form-group">
							  <label for="cpwd"><i class="fa fa-lock" aria-hidden="true"></i>Confirm Password</label>
							  <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password">
							</div>
							
							<div class="w3ls-bot">
								<div class="form-end">
									<input type="submit" value="LOGIN">
								</div>
								<div class="clearfix"></div>
							</div>
							
					<?php if(@$_GET['q']==1) {
								echo "<br/><h2><b>Successfully Registered<b></h2>";
						}?>
						</form>
								
						</div>
		</div>
	</div>
</body>
</html>
