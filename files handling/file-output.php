<?php 
$theFile = fopen("generated.txt", "w");
fputs($theFile, "this file was generated using a php function");
?>