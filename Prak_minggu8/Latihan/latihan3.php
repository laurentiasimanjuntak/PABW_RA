<?php
 
function faktorial($n=1) {
	$hasil = 1;
	for($i=$n; $i >= 1; $i--) {
		$hasil = $hasil * $i;
	}
	return $hasil;
}
 $n = 5;
echo $n;
echo "! = ".faktorial($n);
 
?>