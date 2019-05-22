<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$temp = "test";
		
		function test1() {
			echo $temp;
		}

		function test2($temp) {
			echo $temp;
		}

		function test3() {
			global $temp;
			echo $temp;
		}
		
		test1();
		echo "<br>";
		test2($temp);
		echo "<br>";
		test3();
		echo "<br>";

		function updateCounter()
		{
			static $counter = 0;
			$counter++;
			echo "Static counter is now {$counter} <br>";
		}
		
		$counter = 10;
		updateCounter();
		updateCounter();		
		echo $counter;

	?>
  </body>
</html>
