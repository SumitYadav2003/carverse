
<?php
require "configure.php";
if(isset($_POST["asub"])){
$name = $_POST["name"];

$city=$_POST["city"];

$state=$_POST["state"];

$day=$_POST["day"];

$date=$_POST["date"];

$time=$_POST["time"];
$query = "INSERT INTO servapt values('$name','$city','$state','$day','$date','$time')";

$query_result = $conn->query($query);
header('Location: Mainpage.php');
    exit();
}
?>