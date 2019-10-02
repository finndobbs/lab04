<!Doctype HTML>
<html>
<head>
	<title>Multiplication Table</title>
</head>
<body>
	<table>
		<?php 		
		for ($i=1; $i<=100; $i++){
			echo '<tr>';
			for ($j=1; $j<=100; $j++){
				$product = $i * $j;
				echo '<td>' .$i * $j. '</td>';
			}
			echo '</tr>';
		}		
		?>
	</table>
</body>
</html>
