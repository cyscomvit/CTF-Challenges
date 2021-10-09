<?php

$username=$_POST['username'];
$password=$_POST['password'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("mydb", "root", "password");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE if not exists demo";
if(mysqli_query($link, $sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$link = mysqli_connect("mydb", "root", "password", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE TABLE if not exists users(
    username VARCHAR(30),
    password VARCHAR(30)
)";
if(mysqli_query($link, $sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql = "INSERT INTO users (username,password) VALUES ('admin','auwdjawoidjawiodj')";

if(mysqli_query($link, $sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
$sql = "SELECT * FROM users where username='$username' and password='$password' ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
			echo 'Your flag is WASP{level_9_flag}';
        mysqli_free_result($result);
    } else{
        echo "Not Authorized";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
