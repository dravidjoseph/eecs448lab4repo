<?php
//access the global array called $_POST to get the values from the radio fields
$q1 = $_POST["moldova"];
$q2 = $_POST["nepal"];
$q3 = $_POST["ghana"];
$q4 = $_POST["honduras"];
$q5 = $_POST["uruguay"];

echo "Question 1: What is the capital of Moldova?<br>";
echo "You answered: ".$q1."<br>";
echo "Correct answer: Chisinau<br><br>";
echo "Question 2: What is the capital of Nepal?<br>";
echo "You answered: ".$q2."<br>";
echo "Correct answer: Kathmandu<br><br>";
echo "Question 3: What is the capital of Ghana?<br>";
echo "You answered: ".$q3."<br>";
echo "Correct answer: Accra<br><br>";
echo "Question 4: What is the capital of Honduras?<br>";
echo "You answered: ".$q4."<br>";
echo "Correct answer: Tegucigalpa<br><br>";
echo "Question 5: What is the capital of Uruguay?<br>";
echo "You answered: ".$q5."<br>";
echo "Correct answer: Montevideo<br><br>";

$score = 0;

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

echo "You answered ".$score." questions correctly.";

$score = $score * 20;

echo "<br><br> Your score is ".$score."%";


?>