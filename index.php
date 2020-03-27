<?php


function fibo($c){
	$a = $count = 0;
	$b = 1;
	print $a." ".$b." ";
	while ($count < $c){
		$temp = $a + $b ;
		$a = $b;
		$b = $temp;		
		print $temp." ";
		$count += 1;
	}	
}


$n = 15;
fibo($n);