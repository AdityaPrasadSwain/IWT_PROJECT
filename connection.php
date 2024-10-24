<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "muna";

$conn = mysqli_connect($servername,$username,$password,$databasename);

if ($conn) {
    echo "<script>alert('Connection sucessfull')</script>";
}
else{
    echo "<script>alert('Connection failed')</script>";
}
?>