<?php
	#css
	echo "<link rel='stylesheet' type='text/css' href='style.css' />";
	#Header
	echo "<h1> Fruit Store Receipt </h1>";

	#User, password and shipping
	$user = $_POST["user"];
	$password = $_POST["password"];
	$shipping = $_POST["shipping"];
	
	#quantities of each fruit
	$q1 = $_POST["qapple"];
	$q2 = $_POST["qbanana"];
	$q3 = $_POST["qpear"];

	
	#cost of each fruit
	$costPerApple = 2.00;
	$costPerBanana = 3.00;
	$costPerPear = 7.00;
	
	$totalApple = $q1 * $costPerApple;
	$totalBanana = $q2 * $costPerBanana;
	$totalPear = $q3 * $costPerPear;

	//shipping is free for week
	if($shipping == "week"){
  	  	$totalShipping = 0.00;
  	  	$typeShipping = "Seven Day";
	}
	//shipping is $5 for three day
	elseif($shipping == "3-day"){
  	  	$totalShipping = 5.00;
  		$typeShipping = "Three Day";
	}
	//shipping is $50 for overnight
	else{
  	  	$totalShipping = 50.00;
  		$typeShipping = "Overnight";
	}
	
	//calculate total
	$total = $totalApple + $totalBanana + $totalPear + $totalShipping;
	echo "<p>Username: $user <br> Password: $password </p>";
	echo '<table border = "1" style = "width = 100%">';
		echo "<tr>";
			echo "<td></td>";
			echo "<td><strong> Quantity</strong> </td>";
			echo "<td><strong> Cost Per Item</strong></td>";
			echo "<td> <strong>Subtotal</strong></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td><strong>Apple</strong></td>";
			echo "<td> $q1 </td>";
			echo "<td> $2.00 </td>";
			echo "<td> $$totalApple </td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td><strong>Banana</strong></td>";
			echo "<td> $q2 </td>";
			echo "<td> $3.00 </td>";
			echo "<td>$$totalBanana </td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td><strong>Pear</strong></td>";
			echo "<td> $q3 </td>";
			echo "<td> $7.00 </td>";
			echo "<td> $$totalPear </td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td> <strong>Shipping</strong> </td>";
			echo "<td colspan='2'> $typeShipping </td>";
			echo "<td> $$totalShipping </td>";
		echo "</tr>";
		echo "<tr>";
			echo '<td colspan="3"> <strong>Total Cost</strong> </td>';
			echo "<td> $$total </td>";
		echo "</tr>";
	echo "</table>";
?>