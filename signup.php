<?php

require "connection.php";

global $name;
global $username;
global $email;
global $password;


if ($_POST['name'] && $_POST['username'] && $_POST['email'] && $_POST['password']){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];			
    $password=$_POST['password'];
}


$sql = "INSERT INTO `login` (`name`, `username`, `email`,`password`) VALUES ('$name', '$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>