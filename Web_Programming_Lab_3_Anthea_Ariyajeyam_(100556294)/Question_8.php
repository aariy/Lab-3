<!-- Question_8.php 
	 
	 This is for Web Programming Lab 3 Question 8
	 
	 8) This will declar an array and then use a foreach loop to iterate though iterate
	 8.1) This will count the number of occurrences of each colour within the array
	 
	 Author: Anthea Ariyajeyam (100556294)
	 Date: October 29, 2015
-->

<?php
	
	//8)
	$arrColour = array ("Red", "Green", "Blue", "Yellow", "White", 
						"Yellow", "Green", "Blue", "Yellow", "Grey",
						"Red", "Yellow", "Blue", "Yellow", "White");
	
	$intCount = 0;
	echo "QUESTION 8 ";
	foreach ($arrColour as $value)
	{
		echo "<p> The key ". $intCount. " : " . $value . "</p>";
		$intCount++;
	}

	//8.1)
	echo "<br> </br> <br> </br> QUESTION 8.1:";
	$arrCount = array_count_values($arrColour);
	foreach($arrCount as $strColour => $intCount)
		echo "<p> $strColour occurs $intCount times </p>";
	
?>