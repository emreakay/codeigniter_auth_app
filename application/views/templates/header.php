
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=css_url()?>bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?=css_url()?>theme.css" rel="stylesheet">
  </head>

  <body role="document">

  <!-- Fixed navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><?php echo $title; ?></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li><?php echo anchor('info', 'Info'); ?></li>
          <?php if(!$login): ?>
            <li><?php echo anchor('login', 'Log in'); ?></li>
            <li><?php echo anchor('signin', 'Sign in'); ?></li>
          <?php else: ?>
            <li><?php echo anchor('logout', 'Log out'); ?></li>
          <?php endif; ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container theme-showcase" role="main">
