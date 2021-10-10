<?php

$username=$_POST['username'];
$password=$_POST['password'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = new mysqli("mydb", "root", "password");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . $link->connect_error);
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE if not exists demo";
if($link->query($sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . $link->error;
}
$link = new mysqli("mydb", "root", "password", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . $link->connect_error);
}

$sql = "CREATE TABLE if not exists users(
    username VARCHAR(30),
    password VARCHAR(30)
)";
if($link->query($sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . $link->error;
}

$sql = "INSERT INTO users (username,password) VALUES ('admin','auwdjawoidjawiodj')";

if($link->query($sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . $link->error;
}
 
$sql = "SELECT * FROM users where username='$username' and password='$password' ";
if($result = $link->query($sql)){
    if($result->num_rows > 0){
            echo 'Your flag is WASP{level_9_flag}';
        $result->free();
    } else{
        echo "Not Authorized";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $link->error;
}
// Close connection
$link->close();
?>
