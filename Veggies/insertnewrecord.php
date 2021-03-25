<html>
<body>


<?php
$servername = "127.0.0.1";
$username = "root";
$password = "mysql";
$dbname = "test";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
die("Connection failed: " .$conn->connect_error);
}



$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$passwd=$_POST["password"];

$sql = "INSERT INTO users(fname, lname, email, password) VALUES ('$fname','$lname','$email','$passwd')";

if($conn->query($sql) === TRUE) {
echo "Sign up successful!";
header("location:login.html");
}
else{
echo "Error: " .$sql. "<br>" .$conn->error;
}

$conn->close();
?>

</body>
</html>
