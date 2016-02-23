<?php
echo 'Hello World';
echo '<table border = '1' style = 'width = 100%'>';
echo '<tr>';
echo '<td>'.10.'</td>';
echo '</tr>';
echo '</table>';
/**
	echo '<table border = '1' style = 'width = 100%'>';
	//first row manually
	echo '<tr>';
	for($i = 1; $i <=10; ++$i){
		echo '<td>'.$i.'</td>';
	}
	echo '</tr>';
	
	for($i = 1; $i <= 10; ++i){
		echo '<td>'.$i.'</td>';
		for($j = 1; j <= 10; ++j){
			echo '<td>'.$i * $j.'</td>';
		}
	}
	
	echo '</table>';
	*/
?>