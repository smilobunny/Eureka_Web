
<html>
<head>
<title> FrontPage</title>
<link type="text/css" rel="stylesheet" href="css/culPage.css">
<script>
function myFunction1()
{
document.location.href="form6.php";
}
function myFunction2()
{
document.location.href="form2.php";
}
function myFunction3()
{
document.location.href="form8.php";
}
function myFunction4()
{
document.location.href="form5.php";
}
function myFunction5()
{
document.location.href="form4.php";
}

</script>

</head>
<body  style="padding:0px; margin:0px; background-color:#ffffcc;">

<?php include("eurmenu.php"); ?> 
									<div class="image1" style="background-image:url(images/culbackground.jpg); margin-top:100px;  ">
					<div class="heading1" vspace='20%'> CULTURAL </div>
					</div>		
<div style="background-color:#9999ff;height:50px;"></div>					
<div class="maincontent" >
<div class="flexname1" >
<img src="images/cul1.jpg" style="margin-left:20px; cursor:pointer;" onclick="myFunction1()"> </div>
<div class="flexname2" >
<img src="images/cul2.jpg" style="margin-left:430px; cursor:pointer;" onclick="myFunction2()"> </div>
<div class="flexname3" >
<img src="images/cul3.jpg"  style="margin-left:850px; cursor:pointer;" onclick="myFunction3()"> </div>
</div>
<div class="maincontent2">
<div class="flexname4" >
<img src="images/cul4.jpg" style="margin-left:250px; cursor:pointer;" onclick="myFunction4()" >
</div>
<div class="flexname5" >
<img src="images/cul5.jpg"  style="margin-left:710px; cursor:pointer;" onclick="myFunction5()">
</div>
</div>
</body>
</html>