<?php 	
echo '<style>table, th, td { border:1px solid black;}</style>';
	echo '<table>';
	for ($i=0; $i<=100; $i++){
		if ($i == 0){
	            echo '<tr><td></td>';
	            for ($k=1; $k<=100; $k++){
	                echo '<th scope="col" class="col">' .$k. '</th>';
	            }
	            echo '</tr>';
		}	
		else{
		    echo '<tr>';	
		    echo '<th>' .$i. '</th>';
		    for ($j=1; $j<=100; $j++){
	                echo '<td>' .$i * $j. '</td>';
		    }
		    echo '</tr>';
		}
	}	
	echo '</table>';	
?>
