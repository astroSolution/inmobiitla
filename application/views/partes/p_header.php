<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $titulo;?></title>

    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css');?>" media="screen" title="no title">
    <link href="<?php echo base_url('public/css/jquery.filer-dragdropbox-theme.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/jquery.filer.css');?>" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-3.1.0.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/qunit/qunit-1.11.0.js"></script>
    <script src="<?php echo base_url('public/js/bootstrap.min.js');?>"></script>


  	<script src="<?php echo base_url('public/js/jquery.filer.min.js');?>" type="text/javascript"></script>
  	<script src="<?php echo base_url('public/js/custom.js');?>" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('[data-toggle="popover"]').popover();
    });

    </script>

        <script type="text/javascript" scr="<?php echo base_url('public/js/inmobi.js');?>"></script>
  </head>
  <body>
