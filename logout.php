<?php
session_start();
if(isset($_SESSION['Name'])){
session_destroy();
header('Location:login.php');
}else{
header('Location:login.php');
}
?>