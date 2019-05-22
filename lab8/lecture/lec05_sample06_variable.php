<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$foo = "test";
		$bar = & $foo;

		echo $bar;
		
		echo "<br>";
				
		$var = "hello";
		$$var = "world!";

		echo "$var $hello";
	?>
  </body>
</html>
