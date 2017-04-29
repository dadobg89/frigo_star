<?php
require 'include/head.html';
$images = array(1,2,3,4,5,6,7);

switch ($_GET['elements']) { // switch sluzi za generisanje naslova
	case 'termički':
		$naslov = "Termički uređaji";
		break;

		case 'rashladni':
		$naslov = "Rashladni uređaji";
		break;

		case 'neutralna':
		$naslov = "Neutralna oprema";
		break;

		case 'termika':
		$naslov = "Termika";
		break;
	
	default:
		# code...
		break;
}

?>




    <!-- jQuery library (served from Google) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="jquery.bxslider/jquery.bxslider.js"></script>
    <!-- bxSlider CSS file -->
    <link href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />


<div class="wrapper">
	<article class="slider">
		<h2 class="slider_h2"><?php echo $naslov ?></h2>
		<ul class="bxslider">
		  <?php 
		  foreach ($images as $image) {
		  	 echo "<li><img src='images/".$_GET['elements']."/".$image.".jpg'></li>";
		  }
		   ?>
		</ul>
	</article>




	<section id="drugi">
		<a href="slider.php?elements=termički" class="dugme">termički urađaji</a>
		<a href="slider.php?elements=rashladni" class="dugme">rashladni urađaji</a>
		<a href="slider.php?elements=neutralna" class="dugme">neutralna oprema</a>
		<a href="slider.php?elements=termika" class="dugme">termika</a>
	</section>
</div>




</body>
</html>