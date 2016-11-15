<!DOCTYPE html>
<html>
<head>

<title>OOP in PHP</title>
<?php include("class.php"); ?>
</head>
<body>
	<?php
	$stefen = new person();
	$jimmy = new person();

	$stefen->set_name("stefen mischook");
	$jimmy->set_name("nick waddles");

	echo "stefen's full name is:  " .$stefen->get_name();
	echo "<br>";
	echo "      nick's full name is:  "  .$jimmy->get_name();
	?>
</body>
</html>