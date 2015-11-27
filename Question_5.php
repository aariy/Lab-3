<!-- Question_5.php 
	 
	 This is for Web Programming Lab 3 Question 5.
	 
	 This will have the code for Question 5 and then the it will be used to answer question 5.1 and 5.2
	 
	 Author: Anthea Ariyajeyam (100556294)
	 Date: October 29, 2015-->
	 
<?php
	$arrColours = array (0 => "Red", 2 => "Green", 3 => "Blue", 1 => "Yellow", 4 => "White");
	
	echo "<p>";
	$strColour = reset($arrColours);
	echo "Reset: $strColour <hr>";
	
	$strColour = next($arrColours);
	echo "Next: $strColour <hr>";
	
	$strColour = next($arrColours);
	echo "Next: $strColour <hr>";
	
	$strColour = reset($arrColours);
	echo "Reset: $strColour <hr>";
	
	$strColour = current($arrColours);
	echo "Current: $strColour <hr>";
	
	$strColour = end($arrColours);
	echo "End: $strColour <hr>";
	echo "</p>";
	
	
?>
