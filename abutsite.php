<html>
<head>
<title> FrontPage</title>
<link type="text/css" rel="stylesheet" href="css/vision.css">
</head>
<body  style="padding:0px; margin:0px; background-color:#ffffcc;">


<?php
		//print_r($_SESSION);
	?>
 <?php
session_start();
	// Check if session is not registered, redirect back to main page. 
	if(isset($_SESSION['username'])) {
 include("login.php"); }
 else
 include("eurmenu.php");
 ?> 

									<div id="page-container">
			<div id="site-container">
				<div id="main-container">
<div id="mainpara" style="margin-top:-20px;">
<div class="heading1">
ABOUT THE FEST</div>
<div class="para1">

Once every year, Eureka fest helps students amalgamate with diffrent students globally, around diffrent countries to orchestrate 

one of the largest and the most glamorous fests of Northern India. 
"Eureka" comes from the Ancient Greek word  heúrEka, meaning "I have found (it)", It is closely related to heuristic, which refers to 

experience-based techniques for problem solving, learning, and discovery.
"Eureka" is an interjection used to celebrate a discovery or invention. It is a transliteration of an exclamation attributed to 

Archimedes.
EurekaFest is a multi-day celebration designed to empower a legacy of inventors through activities that inspire youth, honor role 

models, and encourage creativity and problem solving.
This annual mega-cultural Tech festival , celebrated every year, is an amalgamation of entertainment, excitement, and potential of 

the youth of our era. 
Eureka is a home for tech & creative  students in Northern India,Created to help accelerate innovation..
</div>
</div>
<div id="mainpara2">
<div class="heading2">
OUR VISION</div>
<div class="para1" style="height:700px;">
We promises an exuberant cocktail of social awareness ,unending entertainment  & cultural diversity,  by offering a rich blend of 

music, art, dance, drama, sports & workshops. 
Eureka has  unique venues and hosts events  featuring Researchers and experts with the goal to help foster our students community  . 
Do you have the soul of an artist but the brain of a scientist? Grab your brushes, beakers, scissors, pens and test tubes and let 

your creativity soar as you think about and experiment with different ideas.
Every year, there are lots of surprises at the Festival, from street theatre to evening shows, artistic installations & Celebrities 

form diffrent Arenas and more, dozens of activities showcasing the zany side and poetry of science!
Here’s your chance to meet researchers, professionals and future scientists.  all of them are advancing the cause of science right 

here and help you create a better you by Creating & innovating!
You can experiment, create, observe and discuss with them and enjoy more than fifty inspiring hands-on activities.
There are patterns which emerge in one's life, circling and returning anew, an endless variation of a theme. An idea that echoes or 

pervades in an artful story. 
We perceive fiction to be something that is invented or untrue, but it is under the mask of fiction that one can tell the truth. 

Fiction is not imagination. It is what anticipates imagination by giving it the form of reality. 
This is quite opposite to our own natural tendency which is to anticipate reality by imagining it, or to flee from it by idealizing 

it.
On the other hand,At the Eureka! Festival, we’re doing our best to be environmentally responsible. 
We reuse old sets, choose the most environmentally friendly materials, rent equipment when possible, and promote the sorting of waste 

materials.
</div>
</div>

</div>
</div>
</div>
</div>
</body>
</html>