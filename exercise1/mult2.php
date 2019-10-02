<?php 	
	echo '<style>table, th, td { border:1px solid black;}</style>';
	echo '<table>';
	echo '<tr><td></td>';
	for ($k=1; $k<=100; $k++){
		echo '<th scope="col">' .$k. '<th>';
	}
	echo '</tr>';
	for ($i=1; $i<=100; $i++){
		#echo '<tr><th scope="col">' .$i. '</th></tr>';
		echo '<tr>';	
		echo '<th>' .$i. '</th>';
		#echo '<th scope="col">' .$i. '</th>';
		for ($j=1; $j<=100; $j++){
			$product = $i * $j;
			echo '<td>' .$i * $j. '</td>';
		}
		echo '</tr>';
	}	
	echo '</table>';	
?>
