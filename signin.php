<?php
session_start();
require_once 'connect.php';
$login = $_POST['log'];
$password = $_POST['pass'];

$checkuser = mysqli_query($connection, "SELECT * FROM `auth` WHERE `Alogin` = '$login' and `Apassword` = '$password'");

if(mysqli_num_rows($checkuser)>0){
 header('location:workpage.php');
}
else{
  $_SESSION['message'] = "Неверные данные!";
  header('location:index.php');
}
?>