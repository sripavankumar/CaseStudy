<?php
$servername = "localhost";
$username = "root";
$password = "mydb";
$dbname = "casestudy";
$name = $_POST['fname'];
$email = $_POST['email'];
$mobile = $_POST['phone'];
$message = $_POST['Message'];
$status = "Error";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `contact`(`name`, `email`, `mobile`, `message`) VALUES ('$name','$email','$mobile','$message')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
    $status = "Message sent Successfully... We will get back to you soon.";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $status = "Error in Sending Message...";

}
mysqli_close($conn);
header("location:http://localhost/casestudy/index.php?message=$status");
?>
