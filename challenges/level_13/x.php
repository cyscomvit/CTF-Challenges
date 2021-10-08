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
}
}

?>
