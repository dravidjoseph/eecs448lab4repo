<?php
	
	//Beginning of table
	echo '<table border = "1" style = "width = 100%">';
	
	//Begin Row
	echo '<tr>';
	//Star decoration denoting multiplication
	echo '<td>*</td>';
	
	
	for($i = 1; $i <=10; ++$i){
		echo '<td><strong>'.$i.'</strong></td>';
	}
echo '<tr>';
for($i = 1; $i <= 10;++$i){
	echo '<td><strong>'.$i.'</strong></td>';
	for($j = 1; $j <= 10; ++$j){
		echo '<td>'.$i*$j.'</td>';
	}
	echo '</tr>';
}
echo '</table>';

?>
