<?php 

require_once 'php_action/connect.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM users WHERE id = {$id}";
	$result = $conn->query($sql);

	$data = $result->fetch_assoc();

	$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Member</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Edit Member</legend>

	<form action="php_action/update.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>First Name</th>
				<td><input type="text" name="fname" placeholder="First Name" value="<?php echo $data['firstname'] ?>" /></td>
			</tr>		
			<tr>
				<th>Last Name</th>
				<td><input type="text" name="lname" placeholder="Last Name" value="<?php echo $data['lastname'] ?>" /></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email" placeholder="Email" value="<?php echo $data['email'] ?>" /></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><input type="text" name="age" placeholder="Age" value="<?php echo $data['age'] ?>" /></td>
			</tr>
			<tr>
				<th>Active</th>
				<td><input type="text" name="active" placeholder="Active" value="<?php echo $data['active'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<td><button type="submit">Save Changes</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>