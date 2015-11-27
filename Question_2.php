<!--Question_2.php
	
	This will be for Web programming Lab 2 Question 2
	
	2)  This will define a multidimensional array $food that includes the arrays:
		 fruite: apple, orange, banana
		 vegetables: carrot, tomato, paper
	2.1) It will then count the number of elements in the array
	2.2) Use the count_recursive argument to count the number of elements in the array
	2.3) Print out the array using the function print_r()
	2.4) Use echo to retrieve tomato
	2.5) use echo to retrieve orange
	
	Author: Anthea Ariyajeyam (100556294)
	Date: October 28, 2015
-->

<?php
	# 2) Defining the arrays
	$food = array("fruits" => array("apple","orange","banana" ), 
				"vegetables" => array("carrot", "tomato", "paper"));
	
	# 2.1)
	echo "Question 2.1:";
	echo " " . count($food);
	echo ('<hr>');
	
	echo "<br> </br>";
	
	#2.2)
	echo "Question 2.2:";
	echo " " . count($food, COUNT_RECURSIVE);
	
	echo ("<hr>");
	#2.3)
	echo "Question 2.3: ";
	print_r($food);
	echo ("<hr>");
	echo "<br></br>";
	
	#2.4) 
	echo "Question 2.4";
	echo "<br> </br> Retriving orange and tomato <br> </br>";
	echo $food['vegetables'][1] ."<br>";
	echo $food['fruits'] [1];
?>
