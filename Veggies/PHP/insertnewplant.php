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

$pname=$_POST["pname"];
$pamnt=$_POST["pamnt"];
$freq=$_POST["freq"];
$ptime=$_POST["ptime"];
$addit=$_POST["addit"];


$sql = "INSERT INTO plants( pname, pamnt, freq, ptime, addit) VALUES ('$pname','$pamnt','$freq','$ptime','$addit')";

if($conn->query($sql) === TRUE) {
echo "New plant entered!";
header("location:newplant.html");
}
else{
echo "Error: " .$sql. "<br>" .$conn->error;
}

$conn->close();
?>

</body>
</html>
