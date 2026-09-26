<?php
require "configure.php";
if(isset($_POST["sub"])){
$userid = $_POST["name"];
$email=$_POST["email"];
$text=$_POST["text"];

$query = "INSERT INTO cnt values('$userid','$email','$text')";

$query_result = $conn->query($query);
}
header('Location: Mainpage.php');
    exit();
?>