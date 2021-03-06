<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CI Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>assets/css/flatly.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>assets/css/custom.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>assets/css/style.css" />
    <script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
    
</head>
<body>
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a href="<?php echo base_url() ?>" class="navbar-brand">CI Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>about">About</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>posts">Blog</a>
            </li>  
          </ul>
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>posts/create" >Create Post</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
    
