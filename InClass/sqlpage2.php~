<!DOCTYPE html>
<html>
<head>
	<title>PHP page</title>
</head>
<body>
	<?PHP

		$con = new mysqli("localhost", "default", "defaultpwd", "testdb");

		if($con->connect_errno){
			echo "connection error: " . $con->connect_errno;
		}

		$result = $con->query("select * from testtable");
		$row = $result->fetch_assoc();
		foreach($row as $thing){
			echo $thing;
		}

$con->query("create table clients(name varchar(50) not null, id int not null auto_increment)");

		#$result = $con->query("show tables like 'testtable'");
		#$row = $result->fetch_assoc();
		


		#makeClients($con);
		#makeOrders($con);

		#$result = $con->query("select * from clients");
		#if($con->connect_errno){
		#	echo "select error: " . $con->connect-errno;
		#}

		#foreach($result as $row){
			
			#echo "name: " . $row['name'] . " , id: " . $row['id'];
		#}
		#addClient($con, "bob", 1);



		function addClient($con, $name, $id){
			$con->query("insert into clients values ($name, $id)");
			if($con->connect_errno){
				echo "add client error: " . $con->connect_error."<br>";
			}
		}



		function makeClients($con){
			$tempvar = $con->query("create table clients(name varchar(50) not null, id int not null auto_increment)");
			echo "tempvar: " . $tempvar."<br>";
			if($con->connect_errno){
				echo "make clients error: " . $con->connect_error."<br>";
			}

		}

		function makeOrders($con){
			$con->query("create table orders(oid int not null, ordernum int not null, description varchar(100), clientid int not null) if not exists orders");
			if($con->connect_errno){
				echo "make orders error: " . $con->connect_error."<br>";
			}
		}

		function tableExists($con, $tablename){
			$result = $con->query("show tables like '" . $tablename ."'");
			$row = $result->fetch_assoc();
		}
		
	?>
</body>
</html>
