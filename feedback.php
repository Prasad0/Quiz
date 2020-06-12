<html>
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
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>
<body>
	
	
	<?php
	session_start();
		 include_once 'DBConnection.php';
		
		$email=$_SESSION['email'];
		  if(!(isset($_SESSION['email']))){
		header("location:index.php");

		}
		else
		{
		$name = $_SESSION['name'];;

		include_once 'DBConnection.php';
		}?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="#">Online Mock Test</a>
				</div>
				<ul class="nav navbar-nav">
				  <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="home.php?q=1">Home</a></li>
				  <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="home.php?q=3">Ranking</a></li>
				  <li <?php if(@$_GET['q']==4) echo'class="active"'; ?>><a href="feedback.php?q=4">FeedBack</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hi,<?php echo $_SESSION['name']; ?><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="home.php?q=2">Your score</a></li>
					  <!--li><a href="#">My accout</a></li-->
					</ul>
				  </li>
				  <li><a href="logout.php?q=index.php"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
				</ul>    <!---->
			  </div>
			</nav>
			</div>
		</div>
	</div>

<div class="bg1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(image/bg1.jpg); min-height:430px;">
<h2 align="center" style="font-family:'typo'; color:#000066">FEEDBACK/REPORT A PROBLEM</h2>
<div style="font-size:14px">
<?php if(@$_GET['q']==4)
{echo'
 
You can send us your feedback through e-mail on the following e-mail id:<br />
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<a href="mailto:tandelprasad01@gmail.com" style="color:#000000">tandelprasad01@gmail.com  Or ankitkadam1997@gmail.com </a><br /><br />
</div><div class="col-md-1"></div></div>
<p>Or you can directly submit your feedback by filling the enteries below:-</p>
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>E-Mail address:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
</div>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>';}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
<!--container end-->
</body>
</html>