<?php 
function create_menu($type,$seperator,$menuArray,$anchorArray) { 
    $length = count($menuArray);

    if ($type == "list"){
    	echo '<ul>'."\n";
		foreach ($menuArray as $item) {
			if ($item != $menuArray[$length-1] && $seperator == true){
				echo '<li>'.$item.'</li>'.' <b class="seperator"> | </b>'."\n";
			} else {
				echo '<li>'.$item.'</li>'."\n";
			}
		}
		echo "</ul>"."\n";
    } 

     if ($type == "dynamic"){
    	echo '<ul>'."\n";
		foreach ($menuArray as $item) {
			if ($item != $menuArray[$length-1] && $seperator == true){
				echo '<li>'.$item.'</li>'.' <b class="seperator"> | </b>'."\n";
			} else {
				echo '<li>'.$item.'</li>'."\n";
			}
		}
		echo "</ul>"."\n";
    } 

    if ($type == "menu"){
    	echo '<ul>'."\n";
		foreach ($menuArray as $item) {
			$position = array_search($item, $menuArray);
			if ($item != $menuArray[$length-1] && $seperator == true){
				echo '<li><a href="'.$anchorArray[$position].'">'.$item.'</li></a>'.' <b class="seperator"> | </b>'."\n";
			} else {
				echo '<li><a href="'.$anchorArray[$position].'">'.$item.'</li></a>'."\n";
			}
		}
		echo '</ul>'."\n";
    } 

 }
$menuArray = array("About", "Server Status", "Free Hosting", "Premium Hosting", "Design Services", "Contact");
$anchorArray = array("1","2","3","4","5","6");
create_menu("menu",false,$menuArray,$anchorArray);
?>
