<?php 
include '../../connection/connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "INSERT INTO user VALUES (null,'$name', '$username','$email', '$password','$role')";

if($conn->query($sql) == true){
    session_start();
    $_SESSION['msg'] = 'Add User Success';
    header('Location:../../pages/user/index.php');
}else{
    session_start();
    $_SESSION['msg_err'] = 'Add User Failed';
    header('Location:../../pages/user/add_user.php');
}


?>