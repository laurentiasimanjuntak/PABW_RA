<?php 
	$nilai_asli = 50;

	function palsukan_nilai ($nilai){
		global $nilai_asli;
		$nilai_asli = $nilai;
	}

	palsukan_nilai(95);
	echo $nilai_asli;
 ?>