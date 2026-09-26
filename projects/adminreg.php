<!DOCTYPE html>
<html>
<head>
    <title>Show Data Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

.head{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-weight: 300;
    position: relative;
    left: 28px;
    top: 15px;
    color: #ed5f5f;
    font-size: 35px;
}

        h1 {
            text-align: center;
        }

        table, th, td {
  border:1px solid black;
        }
  

    </style>
</head>
<body>

    <h1 class="head">reg Table</h1>

<?php

        $servername = "localhost"; // Change this to your MySQL server's hostname or IP address
        $username = "root"; // Change this to your MySQL username
        $password = ""; // Change this to your MySQL password
        $dbname = "project"; // Change this to the name of your MySQL database
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Query to fetch data from the "users" table
        $sql = "SELECT username,email,password FROM reg";
        $result = mysqli_query($conn, $sql);
        echo "<table>";
            // Check if there is data in the table
            if (mysqli_num_rows($result) > 0) {
                // Loop through the data and generate table rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr width='10px'>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data found</td></tr>";
            }
            echo "</table>";

            // Close the connection
            mysqli_close($conn);
?>
</body>
</html>

