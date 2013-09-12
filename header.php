<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>What is MY IP | <?php echo $title ; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <meta name="description" content="the information of <?php echo $ip ?>, ip country, ip city, ip location, ip map location, ip whois">
    <meta name="keywords" content="the information of <?php echo $ip ?>, ip country, ip city, ip location, ip map location, ip whois" />
    <meta name="author" content="Mohamed Alsemany">

    <!-- Le styles -->
    <link href="/src/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="/src/css/bootstrap-responsive.css" rel="stylesheet">

                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
        
         <style>
      html, body, #map-canvas {
        margin: 0;
        padding: 0;
        height: 350px;
      }
    </style>
    
        
                           
      
      
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/">What IS My IP</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              
            </ul>
            
            <form class="navbar-form pull-right" method="post" action="getinfo.php">
              <input class="span2" type="text" name="ip" placeholder="Enter IP Number" value="<?php echo $ip ?>">
              <button type="submit" class="btn">Get Information</button>
            </form>
            
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<div class="container">


<hr />


    