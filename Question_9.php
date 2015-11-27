<!-- Question_9.php
	 
	 This is for Web Programming Lab 3 Question 9.
	 
	 This will use the sort() and rsort() to sort the array elements in ascending and decending orders.
	 
	 Author: Anthea Ariyajeyam (100556294)
	 Date: October 29, 2015-->
	 
<?php

$arrColours = array ("Red" , "Green", "Blue", "Yellow", "White");

echo "<p>";
foreach ($arrColours as $strColour)
	echo "$strColour ";
echo "</p>";

sort($arrColours);
echo "<p>";
foreach ($arrColours as $strColour)
	echo "$strColour ";
echo "</p>";

rsort($arrColours);
echo "<p>";
foreach ($arrColours as $strColour)
	echo "$strColour ";
echo "</p>";


?>