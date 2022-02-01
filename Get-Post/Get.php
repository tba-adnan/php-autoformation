<?php 
$url = 'https://google.com/robots.txt';
$contents = file_get_contents($url);
if($contents !== false){
    echo $contents;
}
?>