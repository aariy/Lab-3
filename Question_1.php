<!-- Question_1.php 
	 
	 This will create an array that has the numbers from 1-10 and calulates the sum of the elements using 
	 a for loop statment and then caluclate the sum of elements using the foreach statement to calculate 
	 the sum of the elements
	 
	 Author: Anthea Ariyajeyam (100556294)
	 Date: October 25, 2015-->

<?php
	
	$num = [1,2,3,4,5,6,7,8,9,10];
	
	//using the for statement
	$y = count($num);
	echo "The number of elements in the array are: ". $y;
	echo '<hr>';
	
	$x = 0;
	
	for ($i = 0; $i < $y; $i++)
	{
		$x += $num[$i];
		echo '<hr>';
		echo $x;
	}
	
	echo '<hr size = 20 noshade>';
	
	//Using the foreach statement
	$x = 0;
	foreach ($num as $key => $value)
	{
		$x += $num[$key];
		echo "<hr>";
		echo $x;
	}
	
	echo "<hr size = 30 noshade > The sum of elements is " . $x;
?>