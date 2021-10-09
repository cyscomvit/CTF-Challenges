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
$sql = "CREATE DATABASE if not exists ctf";
if($link->query($sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . $link->error;
}

$link = new mysqli("mydb", "root", "password", "ctf");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . $link->connect_error);
}

$sql = "Drop table users;";
if($link->query($sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . $link->error;
}

$sql = "Drop table owasp;";
if($link->query($sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . $link->error;
}



$sql = "CREATE TABLE users(
    username VARCHAR(30),
    password VARCHAR(30)
)";

if($link->query($sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . $link->error;
}

$sql="CREATE TABLE owasp(
    flag VARCHAR(30)
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

$sql = "INSERT INTO owasp VALUES ('WASP{You_ReAcheD_LeveL_13}')";
if($link->query($sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . $link->error;
}
 
$sql = "SELECT * FROM users where username='$username' and password='$password' ";

if($result = $link->query($sql) and !preg_match('/\s/',$username)){

    $num=$result->num_rows;
    if($num > 0){
            echo "<table>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else{
        echo "Hello $username Your password is $password";
    }
} else{
    
    if ( preg_match('/\s/',$username) ){
        echo 'username cannot have whitespace';
    }
    else{
    echo "ERROR: Could not able to execute $sql. " . $link->error;
    }
}
// Close connection
$link->close();
?>
