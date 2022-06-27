<?php
    session_start();
    require $_SERVER['DOCUMENT_ROOT'].'/accounts/dbconnection.php';
    $path = str_replace($_SERVER['DOCUMENT_ROOT'], '', $path);
	 $url = $_SERVER['REQUEST_URI'];
	 $urlpath = parse_url($url, PHP_URL_PATH);
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $path.'/assets/img/favicon-16x16.png';?>" rel="icon">
  <link href="<?php echo $path.'/assets/img/apple-touch-icon.png';?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $path.'/assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
  <link href="<?php echo $path.'/assets/vendor/bootstrap-icons/bootstrap-icons.css';?>" rel="stylesheet">
  <link href="<?php echo $path.'/assets/vendor/boxicons/css/boxicons.min.css';?>" rel="stylesheet">
  <link href="<?php echo $path.'/assets/vendor/glightbox/css/glightbox.min.css';?>" rel="stylesheet">
  <link href="<?php echo $path.'/assets/vendor/remixicon/remixicon.css';?>" rel="stylesheet">
  <link href="<?php echo $path.'/assets/vendor/swiper/swiper-bundle.min.css';?>" rel="stylesheet">
  <link href="<?php echo $path.'/assets/fontawesomev6/css/all.css';?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo $path.'/assets/css/style.css';?>" rel="stylesheet">
  <link href="<?php echo $path.'/assets/css/youtube.css';?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.7.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>