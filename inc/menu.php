<?php
	$menu = array("About", "Server Status", "Free Hosting", "Premium Hosting", "Design Services", "Contact");
	echo "<ul  class="menu_fl">"."\n";
	foreach ($menu as $item) {
		echo "<li>".$item."</li>";
	}
	echo "</ul>";
?>
