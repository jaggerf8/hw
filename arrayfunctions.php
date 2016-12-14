<?php

$array1 = array('one','two','three');
$array2 = array('four','five','six');
$array3 = array(1,2,3);
$array4 = array(4,5,6);
echo "my original arrays: <br>" . $array1 . "<br>" . $array2 . "<br>" . $array3
."<br>" . $array4 . "<br>";
echo array_count_values($array1) . "<br>";
echo "<br>array_flip = " . array_flip($array1);
echo "<br>combining arrays 1 and 2 = " . array_combine($array1,$array2);
echo "<br>difference between arrays 3 and 4= " . array_diff($array3, $array4);
echo "<br>merging arrays 1 and 2= " . array_merge($array1, $array2);
echo "<br>searcges for 'one' in array 1= " . array_search("one",$array1);
echo "<br>sum of values in array 3 are= " . array_sum($array3);
echo "<br>array 2 in reverse is " . array_reverse($array2);
echo "<br>returning all values from array 4= " . array_values($array4);
echo "<br>returns array 2 with the last element popped off= " .
array_pop($array2);
echo "<br>pushes new element onto end of array 4= " . array_push($array4, 7);
echo "<br>arsort on array 1= " . arsort($array1);
if (in_array(1,$array3)){
	echo "<br>if youre reading this, then the value 1 is in array3, using
	in_array";}
?>
