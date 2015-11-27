<!-- Question_7.php

	 This will be for Web Programming Question 7
	 
	 7) This will declare and populate the following pairs in the array:
		0 => "Red" 2 => "Green" 3 => "Blue" 5 => "" 1 => "Yellow" 4 => "White"
	7.1) Will iterate throught the array using foreach (array as value) statment-
	7.2) will iterate through the array using foreach (array as key => value) statements
	
	Author: Anthea Ariyajeyam (100556294)
	Date: October 29, 2015-->

<?php
	
	//7)
	$arrColours = array ( 0 => "Red", 2 => "Green", 3 => "Blue", 5 => "" , 1 => "Yellow", 4 => "White") ;
	$intCount = 0;
	
	//7.1)
	foreach($arrColours as $value)
		echo "<p>". $intCount++ . " $value. </p>";
		
	//7.2)
	foreach ($arrColours as $intKey => $strColour)
		echo "<p> $intKey $strColour </p>";
?>