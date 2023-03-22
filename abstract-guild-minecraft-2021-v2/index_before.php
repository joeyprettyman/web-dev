<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<title>Abstract - Minecraft</title>
	<meta name="description" content="The Abstract guild homepage.">
	<meta name="keywords" content="Abstract, Guild, BDO">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="./favicon.png">
	<link rel="stylesheet" href="./stylesheet.css">
	
	<meta property="og:site_name" content="Abstract - Minecraft">
	<meta property="og:title" content="Abstract's Modded Mineacraft Server" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="./" />
	<meta property="og:image" content="./img/screenshot.png" />
	<meta property="og:description" content="A 1.18 minecraft server for the Abstract guild." />
	<meta name="theme-color" content="#000000">

	<!-- Include this to make the og:image larger -->
	<meta name="twitter:card" content="summary_large_image">
</head>
<body>	
	<div class="wrapper">
		<img src="../img/abstract-logo.png" id="logo">
		
		<!-- <h1>ABSTRACT'S 1.18</h1> -->
		
		<img src='./img/cavs-and-cliffs-logo2.png' id='logo2'>
		
		<div class='countdown-wrapper'>
			<h1><span id='first-one'>UNTIL</span> <span id='second-one'>EVENT:</span></h1>
			<p id="countdown"></p>
		</div>
		
		<!-- <h2>INSTALL INSTRUCTIONS</h2> -->
		<table>
			<tr>
				<td id="calendar">
					<div id='month'>
						December
					</div>
					
					<div id='day'>
						1
					</div>
					
					<div id="time">
						<span id="pst">6:00 PM (PST)</span>
						<span id="mst">7:00 PM (MST)</span>
						<span id="cst">8:00 PM (CST)</span>
						<span id="est">9:00 PM (EST)</span>
					</div>
				</td>
				
				
				<td>
					<div id="title">
						SEED PREVIEW / LAND CLAIMING
					</div>
					
					<div id="instruction">
						<p id='tldr'><b>[TL;DR]</b> - Tonight, I will announce the seed for this season. Then you can make a creative world using that seed. After that, fly around and try to choose a place that you'd like to live.</p>
							
							<ul id="to-do-list">
								<li>This season's Minecraft seed will be announced.</li>
								
								<li>Players will copy that seed and use it to make a new creative world.</li>
								
								<li>Players will fly around looking for a suitible place to claim ownership of.</li>
								
								<li>I will take note of the coordinates of each player and eventually post a map of where everyone lives.</li>
							</ul>
							
							<p>On Wednesday night, we will all load up the chosen Minecraft seed for the server in our own Minecraft clients. Then, we will run around trying to find a suitible spot to call home.</p>
							
							<p>Once everyone has located a spot, we will be preparing for the launch of the server the following night.</p>
					</div>
				</td>
			</tr>
		</table>
		
		
		<!-- <h2>INSTALL INSTRUCTIONS</h2> -->
		<table>
			<tr>
				<td id="calendar">
					<div id='month'>
						December
					</div>
					
					<div id='day'>
						2
					</div>
					
					<div id="time">
						<span id="pst">6:00 PM (PST)</span>
						<span id="mst">7:00 PM (MST)</span>
						<span id="cst">8:00 PM (CST)</span>
						<span id="est">9:00 PM (EST)</span>
					</div>
				</td>
				
				
				<td>
					<div id="title">
						SERVER LAUNCH!
					</div>
					
					<div id="instruction">
						
						<p id='tldr'><b>[TL;DR]</b> - Launch day. We all log on at the same time and begin the 1.18 season.</p>
						
						<p>Once everyone is logged on, we will all meet at spawn before starting the 1.18 season. During that time, feel free to ask any questions you may have, or just socialize with friends.</p>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<br>
	
<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 1, 2050 21:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="countdown"
  document.getElementById( "countdown" ).innerHTML = "<span class='norms'>" + days + "</span><span class='smallers'>:</span><span class='norms'>" + hours + "</span><span class='smallers'>:</span><span class='norms'>"
  + minutes + "</span><span class='smallers'>:</span><span class='norms'>" + seconds + "</span>";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
	document.getElementById("first-one").innerHTML = "SEED:";
	document.getElementById("second-one").innerHTML = "";
    document.getElementById("countdown").innerHTML = "<span class='norms'>-3009625944982219226</span>";
  }
}, 1000);
</script>
</body>
</html>

