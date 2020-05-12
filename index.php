<?php require_once 'php_action/connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>

	<style type="text/css">
		.manageMember {
			width: 50%;
			margin: auto;
		}

		table {
			width: 100%;
			margin-top: 20px;
		}

	</style>

</head>
<body>

<div class="manageMember">
	<a href="create.php"><button type="button">Add Member</button></a>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>firstName</th>
				<th>lastname</th>
				<th>email</th>
				<th>age</th>
				<th>active</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM users";
			$result = $conn->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['firstname']." </td>
						<td>".$row['lastname']."</td>
						<td>".$row['email']."</td>
						<td>".$row['age']."</td>
						<td>".$row['active']."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
							<a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
	<a href="php_action/oop.php"><button type="button">go oop</button></a>
	<a href="php_action/vd.php"><button type="button">go vd</button></a>
<?php
    $cars=array("Volvo","BMW","Toyota");
	echo $cars[0]. "</br>";
	array_push($cars,"toyota");
	echo implode('', $cars);
	foreach($cars as $car){
		echo $car. "</br>";
	}
	
	$dong = array("volvo" => 3, "bmw" => 2, "toyota" => 1);
	foreach($dong as $key => $value){
		echo $value. "o vi tri" .$key. "<br/>";
	}
	$diemdanhgia = array( 
		"volvo" => array
		(
			"mausac" => 7,
			"kieudang" => 8,  
			"tocdo" => 9
		),
	
		"bmw" => array
		(
			"mausac" => 7,
			"kieudang" => 9,
			"tocdo" => 6
		),
	
		"toyota" => array
		(
			"mausac" => 8,
			"kieudang" => 8,
			"tocdo" => 9
		)
		
	);
	echo $diemdanhgia["bmw"]["mausac"];
	
?>
</div>

</body>
</html>