<?php
require_once 'dashboard.php'; 
session_destroy();
exit;
header("Location:login.php");
?>