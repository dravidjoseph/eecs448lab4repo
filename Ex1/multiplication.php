<?php
	echo '<h1>EECS 448 Lab 4 Multiplication Table<h1>';
	//Beginning of table
	echo '<table border = "1" style = "width = 100%">';
	
	//Begin Row
	echo '<tr>';
	//Star decoration denoting multiplication
	echo '<td>*</td>';
	
	//first row of numbers
	for($i = 1; $i <=100; ++$i){
		//number in bold
		echo '<td><strong>'.$i.'</strong></td>';
	}
	//end first row
	echo '<tr>';
	
	
	
	for($i = 1; $i <= 100;++$i){
		//prints second multiplicand
		echo '<td><strong>'.$i.'</strong></td>';
		//Prints corresponding product
		for($j = 1; $j <= 100; ++$j){
			echo '<td>'.$i*$j.'</td>';
		}
	//ends row
	echo '</tr>';
	}
	//ends table
	echo '</table>';

?>
