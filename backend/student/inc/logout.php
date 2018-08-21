<?php
session_start();
ob_start();
unset($_SESSION);
session_destroy();
header("Location:../../../index.php");
?>