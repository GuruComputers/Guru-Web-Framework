<?php
	$menu = array("About", "Server Status", "Free Hosting", "Premium Hosting", "Design Services", "Contact");
	echo '<ul>'."\n";
	foreach ($menu as $item) {
		if ($item != "Contact"){
			echo '<li>'.$item.'</li>'.' | '."\n";
		} else {
			echo '<li>'.$item.'</li>'."\n";
		}
	}
	echo "</ul>"."\n";
?>
