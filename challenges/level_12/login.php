<?php

$username=$_POST['username'];
$password=$_POST['password'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE if not exists demo";
if(!mysqli_query($link, $sql)){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "Drop table users;";

if(!mysqli_query($link, $sql)){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql="Drop table owasp";
if(!mysqli_query($link, $sql)){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql = "CREATE TABLE if not exists users(
    username VARCHAR(30),
    password VARCHAR(30)
)";
if(!mysqli_query($link, $sql)){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql = "CREATE TABLE if not exists owasp(
    flag VARCHAR(30)
)";
if(!mysqli_query($link, $sql)){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


$sql = "INSERT INTO owasp VALUES ('WASP{You_ReAcheD_LeveL_13')";

if(!mysqli_query($link, $sql)){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



$sql = "INSERT INTO users (username,password) VALUES ('admin','qowkdqwiohqweiopxm')";

if(!mysqli_query($link, $sql)){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


 
$sql = "SELECT * FROM users where username='$username' and password='$password' ";



if($result = mysqli_query($link, $sql) and !preg_match('/\s/',$username)){

    $num=mysqli_num_rows($result);
    if($num > 0){
            echo "<table>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "Hello $username Your password is $password";
    }
} else{
    
    if ( preg_match('/\s/',$username) ){
        echo 'username cannot have whitespace';
    }
    else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
// Close connection
mysqli_close($link);
?>
