<?php
$servername="localhost";
$username="root";
$password="";
$bdname="mytestdb";
//create connection
$conn = new mysqli($servername, $username, $password, $bdname);

//check connection
if ($conn->connect_error)
{
    die("connection failed: " . $conn->connect_error);
}
//sql to create table
$sql = "Create table MyGuests(
    id INT,
    firstname VARCHAR(30) ,
    lastname VARCHAR(30) ,
    email VARCHAR(50) 
    )";
    if ($conn->query($sql) === TRUE)
    {
        echo "Table MyGuests created successfully";

    }
    else
    {
        echo "Error creating table" . $conn->error;
    }
    $conn->close();
//echo "Connected successfully";
?>