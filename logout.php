<?php
ob_start();
require 'classLogin.php';
$class = new Login;
$class->doLogout();
?>