<?php
require "configure.php";
if(isset($_POST["sub"])){
$name = $_POST["name"];

$email=$_POST["email"];

$phone=$_POST["phone"];

$review=$_POST["review"];

$query = "INSERT INTO review1 values('$name','$email','$phone','$review')";

$query_result = $conn->query($query);

header('Location: Mainpage.php');
    exit();


}
?>