<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
<h1>list of employees</h1>
<br>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>firstname</th>
			<th>lastname</th>
			<th>email</th>
			<th>phone</th>
			<th>address</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$database = "mystore";

		$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error){
	die("connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM employees";
$result = $connection->query($sql);



while($row = $result->fetch_assoc())
{
echo"	<tr>
			<td>" . $row["id"] . "</td>
			<td>" . $row["firstname"] . "</td>
			<td>" . $row["lastname"] . "</td>
			<td>" . $row["email"] . "</td>
			<td>" . $row["phone"] . "</td>
			<td>" . $row["address"] . "</td>
			<td>
				<a class='btn btn-primary btn-sm' href='update'>update</a>
				<a class='btn btn-primary btn-sm'href='delete'>delete</a>
			</td>
		</tr>";
}




	
		?>
	</tbody>
</table>
</body>
</html>