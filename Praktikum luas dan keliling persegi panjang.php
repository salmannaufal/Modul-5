<?php
	$panjang = 75;
	$lebar = 25;
	$luas;
	$keliling;
	
	function Luas(){
		$GLOBALS['luas'] = $GLOBALS['panjang'] * $GLOBALS['lebar'];
	}
	function keliling(){
		$GLOBALS['keliling'] = 2 * ($GLOBALS['panjang'] + $GLOBALS['lebar']);
	}
	Luas();
	echo "Luas persegi panjang dengan lebar $lebar cm dan panjang $panjang cm : ";
	echo $luas;
	echo "<br>";
	
	keliling();
	echo "Keliling persegi panjang dengan lebar $lebar cm dan panjang $panjang cm : ";
	echo $keliling;
?>