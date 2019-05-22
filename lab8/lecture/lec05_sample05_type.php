<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		if (0)
			echo "true";
		elseif (0.0)
			echo "true";
		elseif ("")
			echo "true";
		elseif ("0")
			echo "true";
		elseif (NULL)
			echo "true";
		else
			echo "false";

		echo "<br>";
		
		$var = 3;
		if(is_int($var)) {
			echo "$var is integer";
			echo "<br>";
			echo "\$var is integer";
		}
		else
			echo "$var type is unknown";

		echo "<br>";

		echo gettype($var);
		echo "<br>";
		settype($var,"float");
		echo gettype($var);
			
		$var = "3" + 4;
		echo "$var <br>";
		$var = "3" + "4";
		echo "$var <br>";
		$var = "3" . "4";
		echo "$var <br>";
		$var = 3 . 4;
		echo "$var <br>";
		$var = 3.4;
		echo "$var <br>";
		$a = 3;
		$var = "result is".$a+4;
		echo "$var <br>";
	?>
  </body>
</html>
