<?php 

require_once 'connect.php';

if($_POST) {
	$fname = isset($_POST['fname']) ? $_POST['fname'] : "";
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$age = $_POST['age'];
    var_dump($fname);
	$sql = "INSERT INTO users (firstname, lastname, email, age, active) VALUES ('$fname', '$lname', '$email', '$age', 1)";
	if($conn->query($sql) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		echo "<a href='../create.php'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $conn->connect_error;
	}

	$conn->close();
}

?>