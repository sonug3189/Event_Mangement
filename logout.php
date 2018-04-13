<?php
/*************************************************************
* Secure Forgot Password System Using PHP
* This script is brought to you by vetbossel
* Website: www.vetbossel.in
* Email: admin@vetbossel.in
***************************************************************/
session_start();
ob_start();
session_unset();
session_destroy();
?>
<script type="text/javascript"> window.location.replace("main3.html"); </script><?php
?>
