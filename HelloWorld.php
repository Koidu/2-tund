<?php
	
	$first_name = "Koidu";
	$last_name = "Kannela";
	
	echo $first_name." ".$last_name;
	
?>
<br>
<?php

	$age = 24;
	// kui on väiksem kui 18, siis on alaealine
	// kui on suurem, siis täisealine
	if($age < 18) {
	//tõene
	echo "alaealine";	
	
	} else {
	// väär
	echo "täisealine";
	}

?>