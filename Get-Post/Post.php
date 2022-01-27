<?php 

$url = 'https://api.github.com/users/tebbaa-adnane';
$data = array('key1' => 'value1', 'key2' => 'value2');
$options = array(
    'http' => array(
        'method'  => 'GET',
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }
var_dump($result);


$xml = file_get_contents("http://api.github.com/users/tebbaa-adnane");

?>