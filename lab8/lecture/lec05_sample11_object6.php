<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		class User
		{
			static $name = "zdl";

			function getName(){
				return self::$name;
			}

			static function showBR(){
				echo "<br>";
			}

		}
				
		echo User::$name;
		User::showBR();
		echo User::showBR();
		echo User::$name;


	?>
  </body>
</html>
