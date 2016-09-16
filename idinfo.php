<?php
	// Check if session is not registered, redirect back to main page. 
	if(!isset($_SESSION))
	session_start();
	if(!isset($_SESSION['username'])) {
		header("location:frontPage.php");}
	$name=$_SESSION['username'];
		
?>




<?php
 
	$con=mysqli_connect('localhost','root','');
									if(!$con)
									{
										die('could not connect'.mysqli_connect_error());
									}
									else
									{
	
									mysqli_select_db($con,"eureka");
									
									$sql="SELECT compid,username,password FROM checklogin WHERE username='$name'";
									$result=mysqli_query($con,$sql);
									$count=mysqli_num_rows($result);
									$row=mysqli_fetch_assoc($result);
									if($count==1)
									$id=$row["compid"];
									}
									
									switch($id)
									{
									case 1:header("location:geekquiz.php");
									break;
									case 2:header("location:prodigy.php");
									break;
									case 3:header("location:cloudcomputing.php");
									break;
									case 4:header("location:dancetransmit.php");
									break;
									case 5:header("location:rampwalk.php");
									break;
									case 6:header("location:dramainvictus.php");
									break;
									case 7:header("location:bandwars.php");
									break;
									case 8:header("location:sursartaj.php");
									break;
									
									}
									?>