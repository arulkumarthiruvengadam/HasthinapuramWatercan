<html>
    <body>
<?php
	$Email1 = $_POST['Email'];
	$Address1 = $_POST['Address'];
	$Mobile1 = $_POST['Mobile'];
	$Totalcan1 = $_POST['Totalcan'];

	// Database connection
	$conn = new mysqli('localhost','root','','watercan');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

		$sql = "INSERT INTO `supply`(`Email`, `Address`, `Mobile`, `Totalcan`) VALUES 
		('$Email1','$Address1','$Mobile1','$Totalcan1')";
		if (mysqli_query($conn, $sql)) {
			header("Location:http://localhost\ArulProject/Final.php?msg=success");
		} 
		else {
			header("Location:http://localhost\ArulProject/Final.php?msg=failed");
		}
		mysqli_close($conn);


	}
?>
<body>
</html>