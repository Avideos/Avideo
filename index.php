<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jqueryui.js"></script>

<script type="text/javascript">
	
$(function() {
   
   $(".introimages:eq(0)").show();

       setInterval(function() {

       	var current = $('.introimages:visible');
       	var next = current.delay(500).next().length ? current.delay(1000).next() : $('.introimages:eq(0)');

       	current.fadeOut(1000);
       	next.fadeIn(1000);

        }, 3000);
	

	$('#selectcontainer1').hover(function(){

		$('#show1').hide();
		$('#hidden1').show();
		$('#selectcontainer1text').show();

	});

	$('#selectcontainer1').mouseleave(function(){

		$('#show1').show();
		$('#hidden1').hide();
		$('#selectcontainer1text').hide();

	});

	$('#selectcontainer2').hover(function(){

		$('#show2').hide();
		$('#hidden2').show();
		$('#selectcontainer2text').show();

	});

	$('#selectcontainer2').mouseleave(function(){

		$('#show2').show();
		$('#hidden2').hide();
		$('#selectcontainer2text').hide();

	});


	$('#selectcontainer3').hover(function(){

		$('#show3').hide();
		$('#hidden3').show();
		$('#selectcontainer3text').show();

	});

	$('#selectcontainer3').mouseleave(function(){

		$('#show3').show();
		$('#hidden3').hide();
		$('#selectcontainer3text').hide();

	});

});	

</script>

<link rel="stylesheet" type="text/css" href="Index.css">
	<title> A Videos </title>
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body>
<div id="container">

<img class="introimages" src="Images/Avengers.jpg">
<img class="introimages" src="Images/GOT.jpg">
<img class="introimages" src="Images/riverdale.jpg">
<img class="introimages" src="Images/scorpion.jpg">
<img class="introimages" src="Images/yourname.jpg">
	
<nav id="navigation">
	
	<ul type="none">
		<li style="margin-right: 6%; margin-top: 2%; padding: 1%; border-radius: 50px; color: white; background-color: rgba(0,151,81, 0.7);">Try for Free</li>
		<li style="padding: 1% 2%; margin-top: 2%; border-radius: 50px; color: black; border: 1px solid rgba(0,151,81,0.8)">Login</li>
		<li>Blog</li>
		<li>Home</li>
		<li><div class="fb-share-button" data-href="https://avideos.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Favideos.com%2F&amp;src=sdkpreparse">Share</a></div></li>
	</ul>

</nav>


</div>

<div id="caption">
	
<p style="color: white; font-size: 50pt; font-family: Arial; margin-left: 5%; float: left; margin-top: 30%;">You can watch movies and TV series on demand<br/>


<button style="font-size: 24pt; margin-top: 3%; border: 1px solid white; border-radius: 55px; padding: 2%; background-color: transparent; color: white;">
	Read More
</button>
</p>

<div id="secondpage">
	<div id="navigation2">
		<ul type="none">
			<a href="#"><li>All</li></a>
			<a href="#"><li>Live pay-per-view</li></a>
			<a href="#"><li>Subscriptions</li></a>
			<a href="#"><li>Mobile</li></a>
			<a href="#"><li>eSports</li></a>
		</ul>
	</div>

<div id="sidecaption">
	<p>Free subscription for 30 days <br>
	</p>
</div>
<div id="side2caption">
	<p>Exploring the Roots of <br/>
		Streaming Video Piracy
	</p>
</div>

<div id="container3">

<a href="Subscriptions.html">
<div class="selectcontainer" id="selectcontainer1">
	<p>
		<p id="hidden1" style="margin-top: 50%;">SUBSCRIPTION VOD</p>
		<p id="show1" style="margin-top: 60%;">SUBSCRIPTION VOD</p>
		<center><span id="selectcontainer1text" style="text-align: center; color: white; font-size: 38pt;">
			SET up SVOD channel <br/> and manage subscribers <br/> easily
		</span></center>
	</p>
</div>
</a>
	
<div class="selectcontainer" id="selectcontainer2">
	<p>
		<p id="hidden2" style="margin-top: 50%;">LIVE PAY-PER-VIEW</p>
		<p id="show2" style="margin-top: 60%;">LIVE PAY-PER-VIEW</p>
		<center><span id="selectcontainer2text" style="text-align: center; color: white; font-size: 38pt;">
			SET up an online PPV <br/> event and start pre-<br/> booking today
		</span></center>
	</p>	
</div>

<div class="selectcontainer" id="selectcontainer3" style="float: right;">
	<p style="margin-left: 10%;">
		<p id="hidden3" style="margin-left: 30%;margin-top: 50%;">LIVE PORTAL</p>
		<p id="show3" style="margin-left: 30%;margin-top: 60%;">LIVE PORTAL</p>
		<center><span id="selectcontainer3text" style="text-align: center; color: white; font-size: 38pt;">
			BUILD automatically your <br/> live streaming portal
		</span></center>
	</p>
</div>




</div>


</div>

<div id="btnContact">Contact US</div>
</div>

</body>
</html>