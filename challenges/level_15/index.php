<?php
include 'index2.html';
if (isset($_GET['cmd'])){
    $cmd = $_GET['cmd'];
    $commands = array("ls","cat flag.txt","pwd","cd","whoami");
    $flag = 0;
    for($i=0;$i<5;$i++){
        if(strcmp($commands[$i],$cmd) === 0){ 
                $flag = 1;
                }
        }
    if($flag === 1){
        echo '<br/><br/>';
        system($cmd);
        }
    else{
        echo 'This command is not permitted. Try again with basic commands'; 
        }
}
?>
