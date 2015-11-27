<!-- Question_1.php 
	 
	 This will create an array that has the numbers from 1-10 and calulates the sum of the elements using 
	 a for loop statment and then caluclate the sum of elements using the foreach statement to calculate 
	 the sum of the elements.
	 
	 *This was tried without looking at the code provided.
	 
	 Author: Anthea Ariyajeyam
	 Date: October 25, 2015-->

<?php
	
	//Declaring Variables
	$num = array ();
	$sum = 0;
	$increment = 0;
	
	//Processing
	//sets the values from 1-10 into the array and finds the sum using a for loop
	for ($i = 0; $i < 10; $i++ )
	{
		$num[$i] = $i + 1;
		$sum = $sum + $num[$i];
	}
	 
	 $sum = 0;
	 
	
	//Using a foreach loop
	$a = array(1,2,3, 17);
	
	foreach($a as $v)
	{
		echo "current value of \$a : $v. \n";
	}
	
	
	foreach ($num as $i)
	{
		$sum = $sum + $i;
	}
	echo "</br>" . $sum;
	
	


?>