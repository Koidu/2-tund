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
<br>
<?php
  // nii mitu korda trüki välja "palju", kui palju on vanust
  
   for($i = 0; $i < $age; $i = $i + 1) {
	 
		// mida korratakse	 
	    echo "palju".$i." ";
   }
	    echo "õnne";

?>
<br>

<?php

// kuup2ev kujul: Friday, 11.09.2015
echo(date("l, j.m.Y"));


?>


