<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8"/>
     <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <!--links to stlye sheets and scripts here-->
     <link rel="stylesheet" href="css/nav.css">
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="css/form.css">
     <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    </head>   
<!--head ends-->
<body> 
<main class="wrapper">
<div class="container">
        <header>
     <h1><a href="index.php" class="title">Katherine Fox Photography</a></h1>   
       <nav class="menu">
        <ul class="topnav" id="myTopnav">
        <?=makeLinks($nav1)?>    
      <!--<li><a href="index.php" class="selected">Works</a></li>
      <li><a href="personal.php">Personal</a></li>
      <li><a href="about.php">About</a> -->
            </ul>
            </nav>
            </header> 
            </div> 
    <h2 class="pageID"><?=$pageID?></h2>