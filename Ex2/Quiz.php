<?php
//access the global array called $_POST to get the values from the radio fields
$q1 = $_POST["moldova"];
$q2 = $_POST["nepal"];
$q3 = $_POST["ghana"];
$q4 = $_POST["honduras"];
$q5 = $_POST["uruguay"];

echo $q1;
echo $q2;
echo $q3;
echo $q4;
echo $q5;

$score = 0;
/**
if($q1 == "Chisinau"){
	++$score;
}
if($q2 == "Kathmandu"){
	++$score;
}
if($q3 == "Accra"){
	++$score;
}
if($q4 == "Tegucigalpa"){
	++$score;
}
if($q5 == "Montevideo"){
	++$score;
}

echo '<br> Your score is '.($score/5)*100.'%<br>';
*/

?>