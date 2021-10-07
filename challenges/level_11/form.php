<?php
include 'flagsearchneedle.html';
if (isset($_GET['needle'])){
	$search = $_GET['needle'];
	if ($search === 'needle'){
		echo 'WASP(NeEdLe_HuH?)';
	}
	else{
	 	$v = system("grep -i $search Oxford_list.txt", $result_code);
	}
}
?>
