<?php 

$permisson = readline("Enter Role : admin/user/loggedout : ");
// $permisson = ''; 
$message =''; 

switch ($permisson) {
 case 'admin' : 
    echo "Welcome admin!";
    break;
 case 'user' : 
    echo "Welcome user check your dashboard";
    break; 
 case 'loggedout' : 
    echo "Please login."; 
    break; 
 
default:
$message = "you can't access this page"; 

}

echo $message; 

?>