<?php 
	function swap(&$num1, &$num2){
		$temp;

		$temp = $num1;
		$num1 = $num2;
		$num2 = $temp;

		echo "<br>Setelah proses swap<br>";
		echo "Bilangan 1 = " .$num1;
		echo "<br>";
		echo "Bilangan 2 = " .$num2;
		echo "<br>";
	}


	$num1 = 5;
	$num2 = 3;

	echo "Sebelum proses swap<br>";
	echo "Bilangan 1 = " .$num1;
	echo "<br>";
	echo "Bilangan 2 = " .$num2;
	echo "<br>";

	swap($num1, $num2);
 ?>