<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		function takesTwo($a, $b)
		{
			if (isset($a)) {
				echo " a is set\n";
			}
			if (isset($b)) {
				echo " b is set\n";
			}
		}

		echo "With two arguments:\n";
		echo "<br>";
		takesTwo(1, 2);
		echo "<br>";
		
		echo "With one argument:\n";
		echo "<br>";
		takesTwo(1);
		echo "<br>";

	?>
  </body>
</html>
