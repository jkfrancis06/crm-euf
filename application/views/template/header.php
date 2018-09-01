<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A TNS| </title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url()?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/icheck/flat/green.css" rel="stylesheet">
  <!-- editor -->
  <link href="<?php echo base_url()?>assets/css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/editor/index.css" rel="stylesheet">
  <!-- select2 -->
  <link href="<?php echo base_url()?>assets/css/select/select2.min.css" rel="stylesheet">
  <!-- switchery -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/switchery/switchery.min.css" />

  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  <?php
      if(isset($css))
          foreach ( $css as $value){
              echo '<link href="'.base_url().'assets/'.$value.'" rel="stylesheet">';
          }

      ?>

</head>

<!--<div class="right_col" role="main">-->
