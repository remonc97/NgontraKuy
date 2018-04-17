<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>NgontraKuy - finding homes for you and me</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css')?>"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/script.js')?>"></script>

    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/owl-carousel/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/owl-carousel/owl.theme.css')?>">
    <script src="<?php echo base_url('assets/owl-carousel/owl.carousel.js')?>"></script>
    <!-- Owl stylesheet -->


    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slitslider/css/style.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slitslider/css/custom.css')?>" />
    <script type="text/javascript" src="<?php echo base_url('assets/slitslider/js/modernizr.custom.79639.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/slitslider/js/jquery.ba-cond.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/slitslider/js/jquery.slitslider.js')?>"></script>
    <!-- slitslider -->
    <?php $this->view('template/fonts')?>
    <style>
        body{
            font-family: 'Ubuntu', sans-serif;
        }
		.card {
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
			border-radius: 5px; /* 5px rounded corners */
		}
    </style>
</head>

<body>
