<!DOCTYPE html>
<html>
<head>
	<title>PHP page</title>
</head>
<body>
	<?PHP
		echo "Username: " . $_POST["username"] . "<br>";
		echo "Password: " . $_POST["pwd"] . "<br>";
		echo "Sex: " . $_POST["sex"] . "<br>";
		echo "<br><br>";
		var_dump($_POST);
	?>
</body>
</html>
