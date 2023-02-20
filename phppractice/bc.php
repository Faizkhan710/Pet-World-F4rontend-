<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// // Create database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// mysqli_close($conn);
// ?>

<?php 
    // mysqli_connect("localhost", "root", "", "customerdb");
    $server= "localhost";
    $username= "root";
    $pwd= "";
    $dbname= "customerdb";
    $conn= mysqli_connect($server, $username, $pwd, $dbname);
    if(!$conn){
        die("database connect nahi howa hy <br>" . mysqli_error());
    }
    else {
        echo "Connection connect ho gaya hy. <br>";
        $sql = "CREATE DATABASE pakistan";
        $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            die("Could not fetch data from database");
        }
        else echo ("Data is succesfully fetched");
    }
?>