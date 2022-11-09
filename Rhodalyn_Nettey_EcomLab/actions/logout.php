<?php

session_start();
//Destroy session
session_destroy();
header('Location:../view/login.php');
exit;
?>
