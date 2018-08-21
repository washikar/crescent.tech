<?php
include_once '../backend/vendor/autoload.php';
use App\database\Database;
use App\classes\Showdata as showdata;
//Show all data
$ob_showdata = new showdata();
$head_newses = $ob_showdata->fatchAllHeadNews();

//Show course
$show_courses=$ob_showdata->fatchAllCourseList();

//contact us

$show_contactus=$ob_showdata->fatchAllcontantList();




?>
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Crescentbd E-School</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="image/png" rel="shortcut icon" href="contents/website/images/favicon.png">
        <link rel="stylesheet" href="contents/website/css/bootstrap.min.css">
        <link rel="stylesheet" href="contents/website/css/font-awesome.min.css">
        <link rel="stylesheet" href="contents/website/css/slick.css">
        <link rel="stylesheet" href="contents/website/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Oswald:300,400,500,600,700" rel="stylesheet">
    </head>