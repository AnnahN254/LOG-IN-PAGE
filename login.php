<?php
$username;
$password;

if ($_POST['username'] && $_POST['password']){
    $username=$_POST['username'];
    if ($password<6 && $password>40){
        $password=$_POST['password'];
    }
    else
    
}

?>