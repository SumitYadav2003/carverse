<?php
include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
// // Include your connection configuration file
// // require "configure.php";

// // Start or resume the user session
// session_start();

// // Check if the user is logged in
// if (!isset($_SESSION['user_id'])) {
//     // If not logged in, crimsonirect to the login page
//     header('Location: user_login.php');
//     exit(); // Stop further execution
// }

if (isset($_POST["asub"])) {
    $name = $_POST["name"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $day = $_POST["day"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    
    // Assuming that you have user information in the session, you can use $_SESSION['user_id'] or other user-related session data here.

    // Insert the appointment into the database
    $query = "INSERT INTO appointment (name, city, state, day, date, time) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $city, $state, $day, $date, $time]);
    
    // Redirect the user to a thank you page or any other appropriate page
    header('Location: thanks1.html');
    exit();
}
?>
<!-- Your HTML form for scheduling an appointment goes here -->
