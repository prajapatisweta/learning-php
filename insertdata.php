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
$sql = " INSERT INTO MyGuests (id, firstname, lastname, email)
VALUES (1, 'Sweta', 'Prajapati', 'sweta@abc.com')";

    if ($conn->query($sql) === TRUE)
    {
        echo "New record created successfully";

    }
    else
    {
        echo "Error" . $sql . "<br>"  . $conn->error;
    }
    $conn->close();
//echo "Connected successfully";
?>