<?php

echo "isset examples<br>";
//isset, 4 if examples

$test = 'test';
if(isset($test))
{
echo "<br>this is a " . $test;
}

//ex2
$two = 2;
if(isset($two))
{
echo "<br>this is test number " . $two;
}

//ex3
$three = "3";
if(isset($three))
{
echo "<br>this is test number " . $three;
}

//ex4
$test4;
if(isset($test4))
{
echo "<br>this is the last isset test.";
}
else
{
echo "<br>the variable was not set";


echo "<br><br>empty examples<br>";
//empty, 4 if examples
$test = "test";
$empty;
if(isset($test))
{
echo "<br>this is the variable 'test'-> " . $test;
echo "<br>the variable 'empty' is empty ";
if(empty($empty))
{
echo "<br><br>the variable 'empty' is empty.";
}
}

//ex2
$empt;
$empts;
if(empty($empt and $empts))
{
echo "<br>both values are empty";
}

//ex3
if(empty($empty || $test))
{
echo "<br>either the 'empty' value or 'test' value is empty";
}

//ex4
if(empty($empty and $test))
{
echo "both are empty.";
}
else
{
echo "<br> not both values were empty";
}


echo "<br><br>null examples<br>";
//Null, 4 if examples
$test = "test";
$a;

echo "this is the variable 'test'-> " . $test;
echo "<br>and the variable 'a'is NULL<br>";
if(is_null($a))
{
echo "<br>the variable 'a' is NULL.";
}
}

//ex2
$a2;
if(is_null($a and $a2))
{
echo "<br>both values are NULL";
}

//ex3
if(is_null($a or $test))
{
echo "<br>either the 'a' value or 'test' value is NULL";
}

//ex4
if(is_null($a and $test))
{
echo "both are NULL.";
}
else
{
echo "<br> not both values were NULL";
}

echo "<br><br>switch examples<br>";

//switch, 4 examples
echo "<br>switch if<br>";
if ($test == "test") 
{
echo "<br>this is a test";
} 
if ($test == "test2") 
{
echo "<br>this is test2";
} 

switch ($test) 
{
case "test":
echo "<br>this is a test";
break;
case "test2":
echo "<br>this is test 2";
break;
}

echo "<br><br>switch isset<br>";
$word = "isset";
if (isset($word))
{
echo "<br>" . $word;
}

switch ($word) 
{
case "hi":
echo "<br>" . $word;
break;
case "hello":
echo "<br>" . $word;
break;

              
}


echo "<br><br>switch empty<br>";
$words="";
if (empty($words));
	      		
switch ($word) 
{
case "hi":
echo "<br>hi!";
 break;
case "":
echo "<br>you didnt say anything";
break;
}

echo "<br><br>switch null<br>";

 $i;
if (is_null($i))
{
$i= 1;
 }
switch ($i)
{
case 1:
echo "'i' was NULL, and now it's-> ". $i;
break;
}

?>


