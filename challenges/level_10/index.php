<?php
    
    $secret = $_GET["secret"];

    if( $secret == "FSasdfjanjlhbasdfss")
    {
        header("Location:./success.html");
        exit();
    }
    else
    {
        echo "Incorrect password or username :(" ;
        
    }
?>
