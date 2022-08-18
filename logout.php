<?php
session_start();
//reset 
session_unset();

//
session_destroy();

header('location:index.php');
?>