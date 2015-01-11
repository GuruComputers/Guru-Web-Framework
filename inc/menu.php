<?php
	$menu = array("About", "Server Status", "Free Hosting", "Premium Hosting", "Design Services", "Contact");
	echo '<ul class="menu_fr">'."\n";
	foreach ($menu as $item) {
		echo '<li>'.$item.'</li>'."\n";
	}
	echo "</ul>"."\n";
?>
