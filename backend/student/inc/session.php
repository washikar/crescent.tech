<?php
include_once '../vendor/autoload.php';
use App\database\Database;
session_start();
ob_start();

if ($_SESSION['user_roll']==null ||  $_SESSION['email']==null)
{
    header('location:../../index.php');
}
?>