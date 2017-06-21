<?php
require_once "connect_db/db_connection.php";
$page=$_GET['page-layout'];
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS-->
    <link rel="stylesheet" type = "text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type = "text/css" href="../css/strict.css">
    <link rel="stylesheet" type = "text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <!--Favicon-->
    <link rel="icon" href="../home/pic/favicon.ico" type="image/x-icon"/>

    <!--  JS  -->
    <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>

    <title>Strict Admin</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['user']) && isset($_SESSION['password'])){
    ?>
    <div class="container-logo collapse navbar-collapse">
        <img src="../home/pic/logo.png" alt="logo">
        <ul class="nav navbar-nav">
            <li><a href="admin.php?page-layout=banner">Banner</a></li>
            <li><a href="admin.php?page-layout=simple">Simple</a></li>
            <li><a href="admin.php?page-layout=showcase"> Showcase</a></li>
            <li><a href="admin.php?page-layout=staywithat">Staywithat</a></li>
            <li><a href="admin.php?page-layout=social">Socical</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out logout-fa"></i></a></li>
        </ul>

    </div>
    <hr>


<div class="container content">
   <?php
    switch($page){
        case 'simple':
            include_once("simple/simple.php");
            break;
        case 'staywithat':
            include_once("staywithat/staywithat.php");
            break;
        case 'showcase':
            include_once("showcase/showcase.php");
            break;
        case 'social':
            include_once("social/social.php");
            break;
        case 'edit-banner':
            include_once("banner/edit-banner.php");
            break;
        case 'add-banner':
            include_once("banner/add-banner.php");
            break;
        case 'del-banner':
            include_once("banner/del-banner.php");
            break;
        case 'edit-showcase':
            include_once("showcase/edit-showcase.php");
            break;
        case 'add-showcase':
            include_once("showcase/add-showcase.php");
            break;
        case 'del-showcase':
            include_once("showcase/del-showcase.php");
            break;
        case 'del-message':
            include_once("staywithat/del-message.php");
            break;
        case 'edit-simple':
            include_once("simple/edit-simple.php");
            break;
        case 'del-simple':
            include_once("simple/del-simple.php");
            break;
        case 'add-simple':
            include_once("simple/add-simple.php");
            break;
        case 'edit-linksocial':
            include_once("social/edit-linksocial.php");
            break;
        default:
            include_once("banner/banner.php");
    }
    ?>
</div>

</body>
<?php
    }else{
        header("location: login.php");
    }?>
</html>


