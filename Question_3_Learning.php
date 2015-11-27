<!-- Question_3_Learning
	
	 This is for Web programming Lab 3 Question 3 for learning purposes
	 
	 Author: Anthea Ariyajeyam (100556294)
	 Date: October 28, 2015
-->

<?php
	$arrCars = array (array("Ford", "Mazda", "Renault", "Vauxhell", "Toyota"),
					  array("Blue", "Black", "Red", "Green", "Red"),
					  array(4,4,2,3,2));
					
	
	for ($intCount = 0; $intCount < 5; $intCount++)
	{
		$strMake = $arrCars[0][$intCount];
		$strColour = $arrCars[1][$intCount];
		$intQuantity = $arrCars[2][$intCount];
		
		echo "<p>Make: $strMake <hr> Colour: $strColour <hr> Quantity: $intQuantity <hr size = 20 noshade></p>";
	}
?>