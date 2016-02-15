<?php

	$tijd = date("H");

	if ($tijd <=6) {
		//nacht
		$good="nacht";
		$class="nacht";
		$music="";

	}elseif($tijd <12){
		//ochtend
		$good="morgen";
		$class="morgen";
		$music="jasminethomsonTakeMeToChurchRemix";
	}elseif ($tijd <18){
		//middag
		$class="middag";
		$good = "middag";
		$music="Kygo(ft.ParsonJames)-StoleTheShow(Dunisco Remix)";
	}else{
		//avond
	$good = "avond";
	$class = "avond";
	$music="LostFrequencies-AreYouWithMe(Kungs Remix)";
	}

	$dag = date("H:i");
	
	

?>


<!DOCTYPE html>
<html>
	<head>
		<title>goede<?php echo $good ?></title>
		<link rel="stylesheet" type="text/css" href="good.css">
	</head>
		<body class="<?php echo $class; ?>">
			<!--<div class="lijst">
					<ul>
						<li><a  href="http://www.vvpelikaan.nl/#7FgGLxFQgxjau5SR.97">Voetbal</a></li>
						<li><a  href="https://www.youtube.com">Youtube</a></li>
						<li><a  href="https://nl-nl.facebook.com">Facebook</a></li>
						<li><a  href="http://www.nu.nl">Niews</a></li>
					</ul>
			</div> -->
		<a href="#" onclick="var audioElm = document.getElementById('collide'); audioElm.muted = !audioElm.muted" ;="">Muziek aan/uit</a>

		<audio id="collide" loop="" autoplay="" onloadeddata="setAutoVolume(&quot;collide&quot;)">
					<source src="<?php echo $music;?>.mp3" type="audio/mpeg">
					
				</audio>

		<div id="container">
			<div id="good"> Goede <?php echo $good ?>!</div>
			<div id="time"> Het is nu  <h1 id="txt"></h1> </div>
		</div>

		<script>
			function startTime() {
				var today = new Date();
				var h = today.getHours();
				var m = today.getMinutes();
				var s = today.getSeconds();
				m = checkTime(m);
				s = checkTime(s);
				document.getElementById('txt').innerHTML =
				h + ":" + m + ":" + s;
				var t = setTimeout(startTime, 500);
			}
			function checkTime(i) {
				if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
				return i;
			}
		</script>


		<body onload="startTime()">
				<h3> Made by Damian Van Es</h3>
		</body>
</html>