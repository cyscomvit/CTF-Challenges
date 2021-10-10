<?php
 $name = $_GET['name'];
 $name = strtolower($name);
 if (strpos($name,"<script>") !== false or strpos($name,"<img") !== false){
echo "WASP{cOnGrATuLaTioNs_Challenge8_cOmPl3ted!}";
}else{
 header('Location: https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpics.me.me%2Fwhen-you-expect-a-meme-but-its-me-dio-kono-47076994.png&f=1&nofb=1');
}
?>

