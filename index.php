 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FrontPage</title>

<style>
	
	body {
		padding: 0; margin: 0;
		overflow: hidden;
	}

	.background {
		position: absolute; top: -10%; left: -10%; 
		width: 120%; height: 120%;
		z-index: 1;
		font-family: Courier;
	}
	
	.cloud {
		position: absolute; top: 0; left: 0; 
		width: auto; height: auto;
		z-index: 2;
		opacity: 0.8;
	}

	
	.header {
		position: fixed; top: 0; left: 0;
		width: 100%; height: auto;
		padding: 12px 0;
		text-align: center;
		z-index: 100;
		color: #fff;
		font-family: Courier;
	}
	.header h1{
	font-size: 72px;
	color:white; 
	padding-top:100px;}

	.header a {
		font-size: 32px;
		text-decoration: none;
		padding-bottom: 2px;
		border-bottom: 1px solid #fff;
		color: #fff;
	}

</style>

</head>
<body >
<div>
	<header class="header">
		<h1 style="color:white; padding-top:100px;">EUREKA 2K16</h1>
      <button style=" padding:8px 20px 8px 20px ;margin-top:20px ;font-size:30px;background-color:#ff9966;color:white;"  onClick="location.href='frontPage.php'"> Start</button>  

	</header>
	<img src="images/background.jpg" alt="New York" class="background">

	<img src="images/1.png" alt="Clouds" class="cloud cloud1">
	<img src="images/2.png" alt="Clouds" class="cloud cloud2">
	<img src="images/3.png" alt="Clouds" class="cloud cloud3">

	<script src="js/jquery-1.11.3.min.js" ></script>
	<script src="js/Twin.min.js"></script>
<script src="js/jquery-parallax.js"></script>


<script>
		$( document ).mousemove( function( e ) {
			$( '.background' ).parallax( -30, e );
			$( '.cloud1' )	  .parallax( 10	, e );
			$( '.cloud2' )	  .parallax( 20	, e );
			$( '.cloud3' )	  .parallax( 30	, e );
		});
	</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


</script>
</div>


</body>
</html>