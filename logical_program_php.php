
<?php
/*
### Prime

$number = 2;
while ($number < 100 )
{
	$div_count=0;
	for ( $i=1;$i<=$number;$i++)
	{
		if (($number%$i)==0)
		{
			//print nl2br("\nNOT Prime ".$number. "\n");
			$div_count++;
		}
	}
	if ($div_count<3)
	{
		echo $number." , ";
	}
	
	$number=$number+1;
}
*/

/*** Factorial **/
/*
$num = 3;

$fac = 1;
	for($x=$num;$x>=1;$x--){
		$fac = $fac * $x;
	}
	
print $fac;
*/



/*** Amstrong  ***/
/*
$actual_val = 407;
$val = strval(407);
$sum = 0;
for($i= 0; $i<strlen($val);$i++){
	$sum += ($val[$i]*$val[$i]*$val[$i]);
}

if($actual_val == $sum){
	print "Given value $sum  is Armstrong";
}else{
	print "Given value $sum is NOT Armstrong";
}
*/


/*** Palindrome **/
/*
$given = strval(24942);
echo " Actual value : ".strval($given)."<br>";
echo " Reverse value : ". substr($given,-(strlen($given)));
*/

/***** Fibonacci  *****/
/*
$fibo = 15;
$a = 0; $b = 1;
print $a." "; print $b." ";
for($i=2;$i<$fibo;$i++){
	$temp = $a + $b;
	$a = $b;
	$b = $temp;
	if($temp > 100){
		break;
	}	
	print $temp." ";
	
}

*/

/*** Patterns **/

$n = range('A','Z');
for($i=0;$i<=5;$i++){
	for($j=5;$j>=$i;$j--){
		echo $n[$i];		
	}
	echo "</br>";
}




