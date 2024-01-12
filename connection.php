<?php



$con = new mysqli('localhost', 'root', '' , 'offline');

if ($conn->connect_error) {
    die("connection failed:". $conn->connect_error);
}
echo "";
$conn->close();
?>
