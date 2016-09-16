<html>
<head>
	<title> Technical Page</title>
	<link type="text/css" rel="stylesheet" href="css/culPage.css">
	<script>
		function myFunction1()
		{
		document.location.href="form3.php";
		}
		function myFunction2()
		{
		document.location.href="form1.php";
		}
		function myFunction3()
		{
		document.location.href="form7.php";
		}
	</script>
</head>
<body  style="padding:0px; margin:0px; background-color:#ffffcc;">
<?php include("eurmenu.php"); ?> 

									<div class="image1" style="background-image:url(images/technical.jpg); margin-top:100px; border-color:#333366; ">
					<div class="heading1" vspace='20%' style="color:#333366;"> TECHNICAL </div>
					</div>		
<div style="background-color:#9999ff;height:50px;"></div>					
<div class="maincontent" style="background-color:#ccffcc; border-bottom:50px solid #9999ff;" >
<div class="flexname1" >
<img src="images/tech1.jpg" style="margin-left:40px; cursor:pointer;" onclick="myFunction1()"> </div>
<div class="flexname2" >
<img src="images/tech2.jpg" style="margin-left:470px; cursor:pointer;" onclick="myFunction2()"> </div>
<div class="flexname3" >
<img src="images/tech3.jpg"  style="margin-left:900px; cursor:pointer;" onclick="myFunction3()"> </div>
</div>
<div style="background-color:#333366;height:50px;">
</div>
</body>
</html>
