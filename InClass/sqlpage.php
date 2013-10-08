<!DOCTYPE html>
<html>
<head>
	<title>PHP page</title>
</head>
<body>
	<?PHP
		#create table persons(pid int not null auto_increment)

		$con = new mysqli("localhost", "default", "defaultpwd", "testdb");

		if($con->connect_errno){
			echo "error here: " . $con->_connect_error();
		}
		
		if(!$con->query("drop table if exists testtable") ||
		   !$con->query("create table testtable(id int)")){

			echo "Table creation failed: " . $con->errno . ", " . $con->error;
		}

		makePersons($con);

		function makePersons($con) {
			$con->query("create table persons(pid int not null auto_increment, firstname varchar(50) not null, lastname varchar(50) not null, age int not null) if not exists persons");

			echo "Table creation passed";
		}
		
	?>
</body>
</html>
