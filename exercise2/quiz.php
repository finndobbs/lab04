<?php

$q1_q = "What is the capital of France?";
$q1 = $_POST["q1"];
$q1_correct = "Paris";

$q2_q = "What is the capital of Kazakhstan?";
$q2 = $_POST["q2"];
$q2_correct = "Nur-Sultan";

$q3_q = "What is the capital of Norway?";
$q3 = $_POST["q3"];
$q3_correct = "Oslo";

$q4_q = "What is the capital of Canada?";
$q4 = $_POST["q4"];
$q4_correct = "Ottawa";

$q5_q = "Which value of pi does not contain an error?";
$q5 = $_POST["q5"];
$q5_correct = "3.141592653589793238462643383279502884197169399375";

$user_answers = array($q1, $q2, $q3, $q4, $q5);
$correct_answers = array($q1_correct, $q2_correct, $q3_correct,
	            $q4_correct, $q5_correct);

$num_correct = 0.00;
for ($i=0; $i<=4; $i++){
	if ($user_answers[$i] == $correct_answers[$i]){
		$num_correct++;
	}
}

echo '<link type="text/css" href="style.css" rel="stylesheet">';

echo '<body>';


echo '<div>';
echo 'Question 1: '.$q1_q. '<br>';
echo 'You answered: ' .$q1. '<br>'; 
echo 'Correct answered: '.$q1_correct.'<br>';
echo '</div>';

echo '<div>';
echo 'Question 2: '.$q2_q. '<br>';
echo 'You answered ' .$q2. '<br>'; 
echo 'Correct answered: '.$q2_correct.'<br>';
echo '</div>';

echo '<div>';
echo 'Question 3: '.$q3_q. '<br>';
echo 'You answered ' .$q3. '<br>'; 
echo 'Correct answered: '.$q3_correct.'<br>';
echo '</div>';

echo '<div>';
echo 'Question 4: '.$q4_q. '<br>';
echo 'You answered ' .$q4. '<br>'; 
echo 'Correct answered: '.$q4_correct.'<br>';
echo '</div>';

echo '<div>';
echo 'Question 5: '.$q5_q. '<br>';
echo 'You answered ' .$q5. '<br>'; 
echo 'Correct answered: '.$q5_correct.'<br>';
echo '</div>';

echo 'Total Correctly Answered: '.$num_correct.'<br>';
echo 'Score: '.$num_correct / 5.00 * 100.00.'%<br>';

echo '</body>';
?>
