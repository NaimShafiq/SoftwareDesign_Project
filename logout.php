<?php 
session_start();
$login = $_SESSION['login_user_type'];
session_destroy();
if($login == 1){
	header('location:login.php'); //origin: admin.php
}else{
	header('location:login.php');

}
?>