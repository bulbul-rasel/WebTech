<!DOCTYPE html>
<html>
	<head>
		<title>My First PHP Application</title>
	</head>

	<body>
		
		<h1>PHP Introduction</h1>

		<?php 
			// echo "First PHP using echo";

			# echo "<br />";

			/* print "First PHP using print";
			*/

			$x = "Hello PHP!";

			echo "Small X: " . $x;

			/* It will give me an error
			echo "Capital X: " . $X;
			*/

			echo "<br />";

			$f = 10.5;

			echo "Floating number: " . $f . "<br />";

			$b = true;

			echo "Boolean value: " . $b . "<br />";

			$arr = array(1, 2, 3, "Hello", 10.5);
			var_dump($arr);

			echo "<br />";

			var_dump($f);

			echo "<br />";

			$n = null;

			echo "Testing Null 1: " . $n;

			echo "<br />";

			var_dump($n);


			echo "<br />";

			/*$empty;

			var_dump($empty);*/

			$age = 12;

			if($age == 10) {
				echo "Your age is 10";
			}
			else if($age > 10) {
				echo "Your age is greater than 10";
			}
			else {
				echo "Your age is less than 10;";
			}

			echo "<br />";

			switch($age) {
				case 10:
					echo "Your age is 10";
					break;
				case 11:
					echo "Your age is 11";
					break;
				case 12:
					echo "Your age is 12";
					break;
				default: 
					echo "What is your actual age?";
			}

			for($y = 0; $y < 10; $y++) {
				echo "<br />" . $y; 
			}

			foreach($arr as $r) {
				echo "<br />" . $r; 
			}

			function add($p1, $p2) {
				echo $p1 + $p2;
			}

			echo "<br />";

			add(10, 12);

		?>

	</body>
</html>