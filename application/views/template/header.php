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
    </style>

    <!-- Ditambah Zacky -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Datatables -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/datatables/dataTables.bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/datatables/dataTables.bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/datatables/jquery.dataTables.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/datatables/jquery.dataTables.min.css')?>">
    <script src="<?php echo base_url('/assets/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('/assets/datatables/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('/assets/datatables/dataTables.bootstrap.js')?>"></script>
    <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js')?>"></script>

    <script type="text/javascript">
    $(document).ready( function () {
        $('#datatablepesan').DataTable();
    } );
    </script>

    <script> 
        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); });
            $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); }); 
        }, 3000); 
    </script>


</head>

<body>
