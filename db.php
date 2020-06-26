<?php

$servernme = "localhost";
$username = "root";
$password = "";

// connction

$conn = new mysqli($servernme,$username,$password);

//to check the connection;

if ($conn->connect_error {

	die("connection failed" . $conn->connect_error);
	# code...
}

echo "connected sucessfully";


//to create db;

$sql = "create database mydb";

if($conn->query($sql)===TRUE)
{
	echo "database created sucessfully";
}

else 
{
	echo "error creating in db" . $conn->error;
}

$conn->close();

?>