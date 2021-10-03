<?php
    
    $secret = $_GET["secret"];

    if( $secret == "FSasdfjanjlhbasdfss")
    {
        header("Location:http://localhost/NATAS 6--7/success.html");
        exit();
    }
    else
    {
        echo "Incorrect password or username :(" ;
        //sleep(5) ;
        //header("Location:http://localhost/Beginner_CTF/Steg.html");
    }
?>