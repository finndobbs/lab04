<?php

$email = $_POST["name"];
$pw = $_POST["pw"];
$item1 = $_POST['item1'];
$item1_cost = 500;
$item1_total = $item1 * $item1_cost;

$item2 = $_POST['item2'];
$item2_cost = 2;
$item2_total = $item2 * $item2_cost;

$item3 = $_POST['item3'];
$item3_cost = 10;
$item3_total = $item3 * $item3_cost;


$shipping = $_POST["shipping"];

switch ($shipping){
	case "Overnight":
		$shipping_cost = 50;
		break;
	case "Standard":
		$shipping_cost = 5;
		break;
	case "Free":
		$shipping_cost = 0;
		break;

	}

$total_cost = $item1_total + $item2_total + $item3_total + $shipping_cost;

echo '<head>';
echo "<link href='style.css' type='text/css' rel='stylesheet'/>";
echo '</head>';
echo '<body>';
echo '<table>';

echo '<tr><td></td>';
echo '<th scope="col"> Quantity</th>';
echo '<th scope="col"> Cost Per Item</th>';
echo '<th scope="col"> Sub Total</th>';
echo '</tr>';

echo '<tr>';
echo '<th>Watch</th>';
echo '<td>'.$item1. '</td>';
echo '<td>$'.$item1_cost.'</td>';
echo '<td>$'.$item1_total.'</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Pencil</th>';
echo '<td>'.$item2. '</td>';
echo '<td>$'.$item2_cost.'</td>';
echo '<td>$'.$item2_total.'</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Toy Car</th>';
echo '<td>'.$item3. '</td>';
echo '<td>$'.$item3_cost.'</td>';
echo '<td>$'.$item3_total.'</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Shipping</th>';
echo '<td colspan="2">'.$shipping.'</td>';
echo '<td>$'.$shipping_cost.'</td>';

echo '<tfoot><tr>';
echo '<th scope="col" colspan="3">Total Cost</th>';
echo '<th scope="col">$'.$total_cost.'</th>';
echo '</tr></tfoot>';

echo '</table>';

echo '</body>';
?>
