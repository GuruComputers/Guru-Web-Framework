<?php
	$menu = array("About", "Server Status", "Free Hosting", "Premium Hosting", "Design Services", "Contact");
	echo "<ul>"."\n";
	foreach ($menu as $item) {
		echo '<li class="menu_fr">'.$item.'</li>';
	}
	echo "</ul>";
?>
