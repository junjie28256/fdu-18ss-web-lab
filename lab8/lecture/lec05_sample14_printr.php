<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$a = null;
		$b = true;
		$c = 1;
		$d = "test";
		$e = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');

		class P{
			public $name = "zdl";
		}

		$f = new p();
		
		print_r($a);
		echo "<br>";
		print_r($b);
		echo "<br>";
		print_r($c);
		echo "<br>";
		print_r($d);
		echo "<br>";
		print_r($e);
		echo "<br>";
		print_r($f);
		echo "<br>";
		echo "<br>";

		var_dump($a);
		echo "<br>";
		var_dump($b);
		echo "<br>";
		var_dump($c);
		echo "<br>";
		var_dump($d);
		echo "<br>";
		var_dump($e);
		echo "<br>";
		var_dump($f);


	?>
  </body>
</html>
