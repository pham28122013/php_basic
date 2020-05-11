<?php 

require_once 'connect.php';

if($_POST) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$active = $_POST['active'];

	$id = $_POST['id'];

	$sql  = "UPDATE users SET firstname = '$fname', lastname = '$lname',email= '$email', age = '$age', active = '$active' WHERE id = {$id}";
	if($conn->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
		echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $conn->error;
	}

	$conn->close();

}

?>