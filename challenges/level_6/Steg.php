<?php
    $username = $_GET["username"];
    $password = $_GET["password"];

    if( $username == "admin" && $password == "hoijsdfdfjn+42790")
    {
        header("Location:http://localhost/Beginner_CTF/Steg_success.html");
        exit();
    }
    else
    {
        echo "Incorrect password or username :(" ;
        //sleep(5) ;
        //header("Location:http://localhost/Beginner_CTF/Steg.html");
    }
?>