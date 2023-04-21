<?php   
session_start(); 
unset($_SESSION["fellerid"]); 
header("location: /CPSU REQUEST APP/"); 
exit();
?>