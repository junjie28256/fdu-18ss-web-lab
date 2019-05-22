<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		function first(){
			echo "first";
		}		
		
		function second(){
			echo "second";
		}		

		function third(){
			echo "third";
		}		
		
		$which = "first";

		switch($which){
			case 'first':	first(); break;
			case 'second':	second(); break;
			case 'third':	third(); break;
			default: echo "none";
		}
		
		echo "<br>";
		
		if(function_exists($which))
			$which();

	?>
  </body>
</html>
