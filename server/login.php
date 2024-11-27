<?php 

include '../server/db.php';
$username = $_POST['email'];
$password = $_POST['password'];


// echo $username." ".$password;

$result = $obj->login($username , $password);
if($result){
    header('Location:../dashboard.php');
}else {
    header('Location:../login.php');
}