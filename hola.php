<?php
$array = ['€', 'http://example.com/some/cool/page', '337'];
$bad   = json_encode($array); 
$good  = json_encode($array,  JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
echo $good;
$variable="HOLA MUNDO";
?>
