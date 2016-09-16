<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" rel="stylesheet" href="css/frontpag.css">
<title> Main Page</title>
<script>
function myFunction()
{
document.location.href="register1.php";
}

</script>
</head>

<body  style="padding:0px; margin:0px; background-color:#ffffcc;">
<?php
session_start();
	// Check if session is not registered, redirect back to main page. 
	if(isset($_SESSION['username'])) {
 include("login.php"); }
 else
 include("eurmenu.php");
 ?> 
									<div id="jslider1" style="background-image:url(images/jslider1.jpg);margin-top:100px;">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
	<script type="text/javascript" src="js/jquery1-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor1.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1000,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.85}},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1000,x:4,y:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1000,x:-3,y:1,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,y:-1,$Cols:8,$Rows:4,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5},
              {$Duration:1000,x:0.5,y:0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1500,y:-0.5,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:$Jease$.$InWave,$Round:{$Top:1.5}},
              {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:$Jease$.$InQuad},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_SlideoTransitions = [
              [{b:-1.0,d:1.0,rY:90.0},{b:8500.0,d:1000.0,o:-1.0,rY:-90.0}],
              [{b:-1.0,d:1.0,o:-1.0},{b:0.0,d:480.0,x:-300.0,o:1.0},{b:1000.0,d:500.0,x:-370.0}],
              [{b:480.0,d:520.0,x:100.0,y:-320.0}],
              [{b:1500.0,d:500.0,y:250.0},{b:8500.0,d:1000.0,x:600.0}],
              [{b:-1.0,d:1.0,o:-1.0,sX:-0.6,sY:-0.6},{b:2000.0,d:500.0,o:1.0,r:360.0,sX:0.6,sY:0.6},{b:8500.0,d:1000.0,y:-150.0}],
              [{b:-1.0,d:1.0,o:-1.0,tZ:-200.0},{b:2500.0,d:1000.0,o:1.0,tZ:200.0},{b:3500.0,d:1000.0,o:-1.0,tZ:200.0}],
              [{b:-1.0,d:1.0,o:-1.0,tZ:-200.0},{b:3500.0,d:1000.0,o:1.0,tZ:200.0},{b:4500.0,d:1000.0,o:-1.0,tZ:200.0}],
              [{b:-1.0,d:1.0,o:-1.0,tZ:-200.0},{b:4500.0,d:1000.0,o:1.0,tZ:200.0},{b:5500.0,d:1000.0,o:-1.0,tZ:200.0}],
              [{b:-1.0,d:1.0,o:-1.0,tZ:-200.0},{b:5500.0,d:1000.0,o:1.0,tZ:200.0},{b:6500.0,d:1000.0,o:-1.0,tZ:200.0}],
              [{b:-1.0,d:1.0,o:-1.0,tZ:-200.0},{b:6500.0,d:1000.0,o:1.0,tZ:200.0},{b:7500.0,d:1000.0,o:-1.0,tZ:200.0}],
              [{b:-1.0,d:1.0,o:-1.0,tZ:-200.0},{b:7500.0,d:1000.0,o:1.0,tZ:200.0},{b:8500.0,d:1000.0,o:-1.0,tZ:200.0}],
              [{b:-1.0,d:1.0,c:{x:250.0,t:-250.0}},{b:0.0,d:1000.0,c:{x:-250.0,t:250.0}},{b:5000.0,d:1000.0,y:100.0}],
              [{b:-1.0,d:1.0,o:-1.0},{b:1000.0,d:1000.0,o:1.0},{b:5000.0,d:1000.0,y:280.0}],
              [{b:2000.0,d:1000.0,y:190.0,e:{y:28.0}},{b:5000.0,d:1000.0,x:280.0}],
              [{b:3000.0,d:520.0,y:50.0},{b:5000.0,d:1000.0,y:-50.0}],
              [{b:3520.0,d:480.0,x:-400.0},{b:5000.0,d:800.0,x:400.0,e:{x:7.0}}],
              [{b:4000.0,d:500.0,x:-400.0},{b:5000.0,d:800.0,x:400.0,e:{x:7.0}}],
              [{b:4500.0,d:500.0,x:-400.0},{b:5000.0,d:800.0,x:400.0,e:{x:7.0}}],
              [{b:-1.0,d:1.0,o:-0.4},{b:0.0,d:1000.0,y:140.0,o:0.4},{b:23000.0,d:1000.0,y:-140.0}],
              [{b:-1.0,d:1.0,c:{x:275.0,t:-275.0}},{b:1000.0,d:1000.0,c:{x:-275.0,t:275.0}},{b:23000.0,d:1000.0,y:100.0}],
              [{b:-1.0,d:1.0,o:-1.0},{b:2000.0,d:1000.0,o:1.0},{b:23000.0,d:1000.0,o:-1.0}],
              [{b:-1.0,d:1.0,sX:-0.7,sY:-0.7},{b:5000.0,d:1000.0,sX:0.4,sY:0.4,e:{sX:16.0,sY:16.0}},{b:9000.0,d:1000.0,sX:-0.2,sY:-0.2,e:{sX:16.0,sY:16.0}},{b:13000.0,d:1000.0,sX:-0.3,sY:-0.3,e:{sX:16.0,sY:16.0}},{b:17000.0,d:1000.0,sX:0.4,sY:0.4,e:{sX:16.0,sY:16.0}},{b:21000.0,d:1000.0,sX:0.4,sY:0.4,e:{sX:16.0,sY:16.0}}],
              [{b:4000.0,d:1500.0,x:195.0,y:450.0,r:-90.0},{b:8000.0,d:1500.0,x:-225.0,y:-240.0,r:-90.0},{b:12000.0,d:1500.0,x:-220.0,y:-1140.0,r:120.0},{b:16000.0,d:1500.0,x:400.0,y:580.0,r:100.0},{b:20000.0,d:1500.0,x:350.0,y:350.0,r:90.0}],
              [{b:-1.0,d:1.0,tZ:1.0},{b:4000.0,d:1500.0,o:-0.6}],
              [{b:-1.0,d:1.0,o:-0.6,r:90.0,tZ:1.0},{b:4000.0,d:1500.0,o:0.6},{b:8000.0,d:1500.0,o:-0.6}],
              [{b:-1.0,d:1.0,o:-0.6,r:180.0,tZ:1.0},{b:8000.0,d:1500.0,o:0.6},{b:12000.0,d:1500.0,o:-0.6}],
              [{b:-1.0,d:1.0,o:-0.6,r:60.0,tZ:1.0},{b:12000.0,d:1500.0,o:0.6},{b:16000.0,d:1000.0,o:-0.6}],
              [{b:-1.0,d:1.0,o:-0.6,r:-40.0,tZ:1.0},{b:16000.0,d:1000.0,o:0.6},{b:20000.0,d:1500.0,o:-0.6}],
              [{b:-1.0,d:1.0,o:-0.6,r:-130.0,tZ:1.0},{b:20000.0,d:1500.0,o:0.6}],
              [{b:-1.0,d:1.0,c:{x:250.0,t:-250.0}},{b:0.0,d:1000.0,c:{x:-250.0,t:250.0}},{b:10000.0,d:500.0,y:90.0}],
              [{b:-1.0,d:1.0,c:{x:150.0,t:-150.0}},{b:1000.0,d:1000.0,c:{x:-150.0,t:150.0}},{b:10000.0,d:500.0,c:{y:150.0,m:-150.0}}],
              [{b:2000.0,d:500.0,x:220.0}],
              [{b:3500.0,d:500.0,rX:-20.0},{b:4000.0,d:1000.0,rX:40.0},{b:5000.0,d:500.0,rX:-10.0},{b:9500.0,d:500.0,o:-1.0}],
              [{b:3500.0,d:2000.0,r:360.0}],
              [{b:-1.0,d:1.0,o:-1.0},{b:2500.0,d:500.0,x:76.0,y:-25.0,o:1.0}],
              [{b:-1.0,d:1.0,o:-1.0},{b:2500.0,d:500.0,x:47.0,y:65.0,o:1.0}],
              [{b:-1.0,d:1.0,o:-1.0},{b:2500.0,d:500.0,x:-47.0,y:65.0,o:1.0}],
              [{b:-1.0,d:1.0,o:-1.0},{b:2500.0,d:500.0,x:-76.0,y:-25.0,o:1.0}],
              [{b:-1.0,d:1.0,o:-1.0},{b:2500.0,d:500.0,y:-80.0,o:1.0}],
              [{b:-1.0,d:1.0,c:{x:120.0,t:-120.0}},{b:6100.0,d:400.0,c:{x:-120.0,t:120.0}},{b:10000.0,d:500.0,y:-120.0}],
              [{b:6500.0,d:500.0,x:220.0}],
              [{b:-1.0,d:1.0,o:-1.0,r:180.0,sX:-0.5,sY:-0.5},{b:7000.0,d:500.0,o:1.0,r:180.0,sX:0.5,sY:0.5},{b:8000.0,d:500.0,o:-1.0,r:180.0,sX:9.0,sY:9.0}],
              [{b:-1.0,d:1.0,o:-1.0,r:180.0,sX:-0.5,sY:-0.5},{b:8000.0,d:500.0,o:1.0,r:180.0,sX:0.5,sY:0.5},{b:9000.0,d:500.0,o:-1.0,r:180.0,sX:9.0,sY:9.0}],
              [{b:-1.0,d:1.0,o:-1.0,r:180.0,sX:-0.5,sY:-0.5},{b:9000.0,d:500.0,o:1.0,r:180.0,sX:0.5,sY:0.5},{b:9500.0,d:500.0,o:-1.0,r:180.0,sX:9.0,sY:9.0}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:3000,b:8500,t:2}],
                  [{d:2000,b:5000}],
                  [{d:3000,b:23000}],
                  [{d:3000,b:9500,t:2}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 980);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('images/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('images/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 380px; overflow: hidden; visibility: hidden;border-left:3px solid #669999; border-right:4px solid #669999;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 380px; overflow: hidden;">
            <div data-b="0" data-p="170.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="images/01.jpg" />
                <div data-u="caption" data-t="0" style="position: absolute; top: 30px; left: 100px; width: 50px; height: 50px;">
                    <div data-u="caption" data-t="1" style="position: absolute; top: 0px; left: 300px; width: 500px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: right;">Be a part of a two Day</div>
                    <div data-u="caption" data-t="2" style="position: absolute; top: 600px; left: -100px; width: 330px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">Epic Journey</div>
                </div>
                <div data-u="caption" data-t="3" style="position: absolute; top: -50px; left: 400px; width: 80px; height: 40px; background-color: rgba(0,0,0,0.5); font-size: 16px; color: white; line-height: 40px; text-align: center;">Us</div>
                <div data-u="caption" data-t="4" style="position: absolute; top: 100px; left: 400px; width: 80px; height: 40px; background-color: rgba(0,0,0,0.5); font-size: 16px; color: white; line-height: 40px; text-align: center;">With </div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Come</div>
                <div data-u="caption" data-t="6" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Enjoy</div>
				<div data-u="caption" data-t="7" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Explore</div>
                <div data-u="caption" data-t="8" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;"> Dance Performances</div>
                <div data-u="caption" data-t="9" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Band Wars</div>
                <div data-u="caption" data-t="10" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">many more ...</div>
            </div>
            <div data-b="1" data-p="170.00" style="display: none;">
                <img data-u="image" src="images/02.jpg" />
                <div data-u="caption" data-t="11" style="position: absolute; top: 300px; left: 20px; width: 500px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">Eureka 2016 : Two Days Amazing Celebration</div>
                <div data-u="caption" data-t="12" style="position: absolute; top: 120px; left: 700px; width: 200px; height: 90px; background-color: rgba(0,0,0,0.5); font-size: 16px; color: #ffffff; line-height: 28px; text-align: center; padding: 2px; box-sizing: border-box;">Nick Jonas<br />
                                            One Direction<br />
                                            Invincible
                </div>
                <div data-u="caption" data-t="13" style="position: absolute; top: -100px; left: 720px; width: 160px; height: 90px; background-color: rgba(235,81,0,0.7); font-size: 20px; color: #ffffff; line-height: 90px; text-align: center;">Miley Cyrus</div>
                <div style="position: absolute; top: 40px; left: 300px; width: 400px; height: 200px; overflow: hidden;">
                 
                </div>
                <div style="position: absolute; top: 300px; left: 600px; width: 300px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">
                    <a href="http://www.jssor.com/development/tool-slideshow-transition-viewer.html" style="color: #fff;">Music Concert</a>
                </div>
            </div>
            <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="images/03.jpg" />
                <div data-u="caption" data-t="18" style="position: absolute; top: -100px; left: 50px; width: 600px; height: 80px; font-size: 16px; color: #ffffff; line-height: 20px;">Eureka 2016 is a cultural technical fest that give every student a chance<br />
                    to explore himself and his/her innovative<br />
                    ideas.We give you a platform to enhance your talent.
                </div>
                <div data-u="caption" data-t="19" style="position: absolute; top: 300px; left: 50px; width: 550px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">Give one more chance to your innovative ideas </div>
                <div data-u="caption" data-t="20" style="position: absolute; top: 40px; left: 650px; width: 300px; height: 300px; background-color: rgba(40,177,255,0.6); overflow: hidden;">
                    <div data-u="caption" data-t="21" style="position: absolute; top: -1350px; left: -1350px; width: 3000px; height: 3000px;">
                        <div data-u="caption" data-t="22" style="position: absolute; top: 0px; left: 0px; width: 3000px; height: 3000px;">
                            <div data-u="caption" data-t="23" style="position: absolute; top: 1200px; left: 1050px; width: 1100px; height: 260px; font-size: 130px;">Enjoy the fest
                                
                                <div style="font-size: .6em;">
                                    with some amazing events
                                    
                                </div>
                            </div>
                            <div data-u="caption" data-t="24" style="position: absolute; top: 1300px; left: 1750px; width: 400px; height: 80px; font-size: 36px;">dance performances,quizes<br />
                                and 
                                <a href="#" style="background-color:rgba(255,255,255,0.5); padding: 0 .1em; text-decoration: none;">workshops</a><br />
                            </div>
                            <div data-u="caption" data-t="25" style="position: absolute; top: 1600px; left: 1000px; width: 700px; height: 130px; font-size: 48px;">some fun activities,<br />
                                Street Plays
                            </div>
                            <div data-u="caption" data-t="26" style="position: absolute; top: 1800px; left: 205px; width: 800px; height: 400px; font-size: 300px;">Especially</div>
                            <div data-u="caption" data-t="27" style="position: absolute; top: 1800px; left: 1500px; width: 500px; height: 120px; font-size: 100px; line-height: 30px;">Musical Concert</div>
                            <div data-u="caption" data-t="28" style="position: absolute; top: 1800px; left: 1650px; width: 300px; height: 70px; font-size: 60px; align:right;">Rampwalk</div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-b="3" data-p="170.00" style="display: none;">
                <img data-u="image" src="images/04.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">Eureka 2016 :: Two Days Amazing Jounrney </div>
                <div data-u="caption" data-t="30" style="position: absolute; top: 40px; left: 640px; width: 300px; height: 300px; background-color: rgba(40,177,255,0.6); overflow: hidden;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 240px; height: 80px; overflow: hidden;">
                        <div style="position: absolute; top: 0px; left: 20px; width: 200px; height: 50px; font-size: 24px; line-height: 50px;">Sponsers
                            
                        </div>
                        <div data-u="caption" data-t="31" style="position: absolute; top: 40px; left: -200px; width: 200px; height: 40px; font-size: 24px; line-height: 40px; text-align: right;">For Fest
                            
                        </div>
                    </div>
                </div>
                <div data-u="caption" data-t="32" style="position: absolute; top: 140px; left: 690px; width: 200px; height: 200px;">
                    <div data-u="caption" data-t="33" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 200px;">
                        <img src="images/icon_opera.png" data-u="caption" data-t="34" style="position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;" />
                        <img src="images/icon3.png" data-u="caption" data-t="35" style="position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;" />
                        <img src="images/icon_saavan.png" data-u="caption" data-t="36" style="position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;" />
                        <img src="images/icon_chrome.png" data-u="caption" data-t="37" style="position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;" />
                        <img src="images/icon2.jpe" data-u="caption" data-t="38" style="position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;" />
                    </div>
                </div>
                <div data-u="caption" data-t="39" style="position: absolute; top: 20px; left: 20px; width: 240px; height: 80px; background-color: rgba(0,0,124,0.3); overflow: hidden;">
                    <div style="position: absolute; top: 0px; left: 20px; width: 200px; height: 50px; font-size: 24px; color: #ffffff; line-height: 50px;">Eureka 2016
                        
                    </div>
                    <div data-u="caption" data-t="40" style="position: absolute; top: 40px; left: -200px; width: 200px; height: 40px; font-size: 24px; color: #ffffff; line-height: 40px; text-align: right;">Events</div>
                </div>
                <div data-u="caption" data-t="41" style="position: absolute; top: 150px; left: 250px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.7); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Cultural</div>
                <div data-u="caption" data-t="42" style="position: absolute; top: 150px; left: 250px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.7); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Technical</div>
                <div data-u="caption" data-t="43" style="position: absolute; top: 150px; left: 250px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.7); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Sports</div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:6px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:123px;left:10px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:123px;right:10px;width:40px;height:58px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Jssor Slider</a>
    </div>
</div>
<div style="background-image:url(images/ex2.jpg); height:300px">
<div><h1 class="heading1">  TIME IS RUNNING !!!APPLY NOW </h1></div>
<div align='center' vspace='20%'><button class="button1" onclick="myFunction()" >REGISTRATION</button></div>
</div>

<div class="pag1">
<h1>Letter From The Dean</h1>
</div>
<div id="img2">
<div class="leftimage"><img src="images/dean.jpe" style="border-right:5px solid #cc9966;padding-left:100px;">
</div>
<div class="righttext" style="font-size:28;">
We promises an exuberant cocktail of social awareness ,unending entertainment  & cultural diversity,  by offering a rich blend of music, art, dance, drama, sports & workshops.Eureka fest helps students amalgamate with diffrent students globally, around diffrent countries to orchestrate one of the largest and the most glamorous fests of Northern India.This annual mega-cultural Tech festival , celebrated every year, is an amalgamation of entertainment, excitement, and potential of 

the youth of our era.
</div>
</div>




</body>
</html>