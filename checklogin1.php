<?php

$username=$password=$compid="";
$usererr=$passerr="";
			if ($_SERVER["REQUEST_METHOD"] == "POST")
{			
			if (empty($_POST["username"])) {
				echo '<script type="text/javascript"> document.alert("Username required") </script>';
				 
						
				   } else {
					 $username = test_input1($_POST["username"]);
					  
					
				   }

					if (empty($_POST["password"])) {
						 echo '<script type="text/javascript"> window.alert("Password required") </script>';
						 $passerr = "Password is required";
						 
					   } else {
						 $password = test_input1($_POST["password"]);
						 
					   }
							
								if(!(empty($_POST["password"])))
								{		

									$con=mysqli_connect('localhost','root','');
									if(!$con)
									{
										die('could not connect'.mysqli_connect_error());
									}
									else
									{
	session_start();
									mysqli_select_db($con,"eureka");
									
									$sql="SELECT * FROM checklogin WHERE username='$username' and password='$password'";
									$result=mysqli_query($con,$sql);
									$count=mysqli_num_rows($result);
									if($count==1){
										$_SESSION["username"]= $username; 
										$_SESSION["password"]= $password; 
										header("location:frontPage.php");
									}
									else
									{ header("location:contactus.php");
									}
					   }
					   $usererr=$passerr="";
					   }
					   }
					   function test_input1($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;}


?>