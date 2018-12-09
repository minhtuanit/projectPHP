<?php
session_start();
unset($_SESSION['khachhang']);
header('location: ../index.php');
?>