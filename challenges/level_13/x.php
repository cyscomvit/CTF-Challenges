<?php
if(!array_key_exists ("name", $_GET) || $_GET['name'] == NULL || $_GET['name'] == ''){

 $isempty = true;

} else {
 $name = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_GET['name'] );
 if (strpos($name,"alert(FLAG)") !== false) {
  $x = true;
}if (strpos ($name, "<img") !== false) {
  $y = true;
}
 if ($x  == true && $y == true){
  echo "WASP{GCHJP2FVWIMSZCG4L8W1}";
}else{
 header('Location: https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpics.esmemes.com%2Fher-how-long-have-you-gone-without-mentioning-jojo->
}
}

?>
