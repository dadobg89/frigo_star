<?php
require 'include/head.html';
switch ($_GET['elements']) { // switch sluzi za generisanje naslova kao i za putanje za prikazivanje slika u slajderu
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

<div class="wrapper">
	<h2 class="slider_h2"><?php echo $naslov ?></h2>
	<article class="slider">
		
	</article>
</div>


</body>
</html>