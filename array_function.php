<?php
/*
// Sorting
$simple_array = array("dbc","bcd","abc");
if(sort($simple_array)){
	print_r($simple_array);
} */

#Suppose we have an array like
/*
$arrayVar = array('best', 'interview', 'question', 'com');

#1. With direct accessing the 0th index:
echo $arrayVar[0];

//2. With the help of reset()
echo "Used reset function : ".reset($arrayVar);



#3. With the help of foreach loop

foreach($arrayVar as $val) {

    echo $val;

    break; // exit from loop

}
*/
/*
function test_odd_number(int $var)

{

   return($var & 1);

}

$array=array(1,3,2,234,3,4,5,6);

print_r(array_filter($array,"test_odd_number")); 
*/
    if(isset($_POST['SubmitButton'])){ // Check if form was submitted

        $input = $_POST['inputText']; // Get input text
        $message = "Success! You entered: " . $input;
    }
?>

<html>
    <body>
        <form action="#" method="post">
            <?php     isset($message) ? print $message : print ''; ?>
            <input type="text" name="inputText"/>
            <input type="submit" name="SubmitButton"/>
        </form>
    </body>
</html>
<?php

$name = array("best","interview","question");
$index = array("1","2","3");
$result = array_merge($name,$index);
echo "<pre>";print_r($result);

$count = sizeof($result);
$result1 = $result2 = array();
for($i=$count-1;$i>=0;$i--){
	$result1[] = $result[$i];
}
print_r($result1);

for($j=0;$j<sizeof($result1);$j++){
	$result2[$result1[$j]] = $j;
}
print_r($result2);