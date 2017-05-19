<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project 1</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
      /* Fix svg filter not loading from external stylesheet in FireFox */
      .sign-link:hover text {
        fill: #ffee58;
        filter: url(#glow);
      }

      .wizard-eye {
        filter: url(#glow);
      }
    </style>
</head>
<body>
  <?php require('./autoload.php'); ?>
  <?php require('./validate.php'); ?>
  <object class="cloud cloud1" type="image/svg+xml" data="cloud.svg">
    Your browser does not support SVG
  </object>
  <object class="cloud cloud2" type="image/svg+xml" data="cloud.svg">
    Your browser does not support SVG
  </object>
  <object class="cloud cloud3" type="image/svg+xml" data="cloud.svg">
    Your browser does not support SVG
  </object>
  <object class="cloud cloud4" type="image/svg+xml" data="cloud.svg">
    Your browser does not support SVG
  </object>
  <svg width="0" height="0">
    <defs>
      <filter id="glow">
        <feGaussianBlur stdDeviation="2" result="coloredBlur"/>
        <feMerge>
          <feMergeNode in="coloredBlur"/>
          <feMergeNode in="SourceGraphic"/>
        </feMerge>
      </filter>
    </defs>
  </svg>

  <div class="container-fluid">
  
    <!-- HEADER -->
    <div class="row">
      <div class="col-xs-12" style="z-index: 20">
        <header class="title">CS 3010 Web Programming Project</header>
      </div>
    </div>

    <div id="sign-navigation" class="row">
      <div class="col-xs-12">
        <nav class="mobile-nav">
          <a id="home-mobile-link" class="mobile-nav-link">Home</a>
          <a id="register-mobile-link" class="mobile-nav-link">Register</a>
        </nav>
      </div>
    </div>