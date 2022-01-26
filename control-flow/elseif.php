<?php 

$username = readline("Enter Username : "); 
$is_admin = true;

if ($is_admin) {
 echo "Welcome admin";
} elseif ($username == "root") {
    echo "Welcome Root"; 
}


?>