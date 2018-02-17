<?php $title='tourism' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title ?> | <?=$pageTitle ?></title>
    <link rel="stylesheet" href="css/refineslide.css" />
    <link href="css/style.css" rel="stylesheet">
    
</head>
<body>
    <nav>
       <ul>
        <li><a href="index.php" class="
        <?php 
            if($page=='home'){echo 'active';}
            ?>
        ">الرئيسية</a></li>
        <li><a href="places.php" class="
        <?php 
            if($page=='places'){echo 'active';}
            ?>
        ">الاماكن</a></li>
        <li><a href="contact.php" class="
        <?php 
            if($page=='contact'){echo 'active';}
            ?>
        ">اتصل بنا</a></li>
        </ul>
    </nav>


<header>
    <img src="images/logo.jpg" class="pop">
    <h1>Travel In Egypt</h1>
</header>


<div class="container">
    
