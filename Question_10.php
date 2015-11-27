<!-- Question_10.php 
	 
	 This is for Web Programming Lab 3 Question 10.
	 
	 This will use the var_dump() function, and then document the structures of the arrays defined in question 8 and 9
	 
	 Author: Anthea Ariyajeyam (100556294)
	 Date: October 29, 2015 -->
	 
<?php

	//using the var_dump() function for the array in question 8
	$arrColour = array ("Red", "Green", "Blue", "Yellow", "White", 
						"Yellow", "Green", "Blue", "Yellow", "Grey",
						"Red", "Yellow", "Blue", "Yellow", "White");
						
	echo "USING THE var_dump() FUNCTION FOR THE ARRAY IN QUESTION 8 <br> </br>";
	var_dump($arrColour);
	
	//using the var_dum() function for the array in question 9.
	$arrColours = array ("Red" , "Green", "Blue", "Yellow", "White");
	
	echo "<br> </br> <br> </br> USING THE var_dump() FUNCTION FOR THE ARRAY IN QUESTION 9 <br> </br>";
	var_dump($arrColours);
	

?>