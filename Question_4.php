<!-- Question_4.php
	 
	 This is for Web Programming lab 3 Question 4.
	 
	 This will replace Blue for purple in the array below
	 
	 Author: Anthea Ariyajeyam (100556294)
	 Date: October 29, 2015-->

<?php
$arrColours = array (0 => "Red", 2 => "Green", 3 => "Blue", 1 => "Yellow", 4 => "White" );

$intSize = count($arrColours);

echo "<p>";
for ($intCount = 0; $intCount < $intSize; $intCount++)
	echo $arrColours[$intCount]. " ";
echo "</p>";

//Replace Blue for Purple
$arrColours[3] = "Purple";

echo"<p>";
for ($intCount = 0; $intCount < $intSize; $intCount++)
	echo $arrColours[$intCount] . " ";
echo "</p>";
?>
