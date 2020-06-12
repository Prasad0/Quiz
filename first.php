<?php
session_start();
include_once 'DBConnection.php';
$time="";
$res=mysqli_query($con,"select * from quiz");
while($row=mysqli_fetch_array($res))
{
	$time=$row["time"];
}
$_SESSION["time"]=$time;
$_SESSION["start_time"]=date("Y-m-d H:i:s");
//echo $_SESSION(start_time);
$end_time=date('Y-m-d H:i:s',strtotime('+'.$_SESSION["time"].'minutes',strtotime($_SESSION["start_time"])));
$_SESSION['end_time']=$end_time;
?>
<script type="text/javascript">
	window.location="home.php?q=quiz&step=2&eid=5bdf156952180&n=1&t=10";
</script>
