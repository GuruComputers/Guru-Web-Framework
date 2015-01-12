<?php 
function create_menu($type,$seperator,$menuArray,$anchorArray) { 
    $length = count($menuArray);

    if ($type == "list"){
    	echo '<ul class="list">'."\n";
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
    	echo '<ul class="dynamic">'."\n";
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
    	echo '<ul class="menu">'."\n";
		foreach ($menuArray as $item) {
			$position = array_search($item, $menuArray);
			if ($item != $menuArray[$length-1] && $seperator == true){
				echo '<li><a href="'.$anchorArray[$position].'">'.$item.'</a></li>'.' <b class="seperator"> | </b>'."\n";
			} else {
				echo '<li><a href="'.$anchorArray[$position].'">'.$item.'<a></li>'."\n";
			}
		}
		echo '</ul>'."\n";
    } 

 }
$menuArray = array("About", "Server Status", "Free Hosting", "Premium Hosting", "Design Services", "Contact");
$anchorArray = array("1","2","3","4","5","6");
create_menu("menu",false,$menuArray,$anchorArray);
?>
