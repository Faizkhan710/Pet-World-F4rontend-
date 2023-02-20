<?php
    // mysqli_connect("localhost", "root", "", "customerdb");
    $server= "localhost";
    $username= "root";
    $pwd= "";
    $dbname= "pakistan";
    $conn= mysqli_connect($server, $username, $pwd, $dbname);
    if(!$conn){
        die("database connect isn't connected <br>" . mysqli_connect_error());
    }
    else {
        echo "database is  successfully connected. <br>";
        $sql = "CREATE DATABASE pakistan";
        $sql = "CREATE TABLE passengers (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMSTAMP
            );";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo die("Could not fetch data from database");
        }
        else{
             echo "Data is succesfully fetched" . mysqli_error($conn);
            }

            mysqli_close($conn);


?>

<?php
   $server= "localhost";
   $username= "root";
   $pwd= "";
   $dbname= "pakistan";
//    create connection
$conn= mysqli_connect($server, $username, $pwd, $dbname);
// check connection
if(!$conn){
    die("database connect isn't connected <br>" . mysqli_connect_error());
}
else {
    echo "database is  successfully connected. <br>";
$sql="INSERT INTO passengers (id,firstname,lastname,email) 
          VALUES (123,'faiz','khan','illahkhanfaiz@gmail.com');"; 

$sql="INSERT INTO passengers (id,firstname,lastname,email) 
          VALUES (1234,'aman','ullah','amanullah@gmail.com');"; 
          
$sql="INSERT INTO passengers (id,firstname,lastname,email) 
          VALUES (1235,'hassan','ulhaq','hassanulhaq@gmail.com');";    

$sql="INSERT INTO passengers (id,firstname,lastname,email) 
          VALUES (1236,'hamza','zahoor','hamzazahor@gmail.com');"; 

if ($conn->multi_query($sql)===true){
    echo "new records created succefully";
    }else{
        echo "error:" . "<br>" .$conn->error;
    }
    $conn->close();

?>