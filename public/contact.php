<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "geosite";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$email = $_POST['email'];
$purpose = $_POST['purpose'];
$message = $_POST['message'];

 

$query = mysqli_query($conn,"INSERT INTO `contact`(`Email`, `Purpose`, `Message`) VALUES ('$email','$purpose','$message')");

if ($query) 
{
	//echo "successfully contacted";
	# code...
	echo "<script> alert('Thanks $email '); </script>";
	echo "<script> location.href='index.html'; </script>";
}
else
{
	echo "error".mysqli_error($conn);
}

?>