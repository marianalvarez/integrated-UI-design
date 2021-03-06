<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main_login.css">
        <link rel="stylesheet" href="css/template.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experiensce.</p>
        <![endif]-->
    <div class="navbar-fixed-top" id="test2">
      <div class="container">
        <div class="navbar-header" id="nav-bar">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="logo.png" width="150" height="45" id="logo"></a>
      
     <!---start>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div id="nav-in">
        
          <div class="navbar-collapse collapse">
            <ul class="nav nav-pills">
              <li class="active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> name_of_librarian <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">View Profile</a></li>
                  <li><a href="#">View Student/Faculty</a></li>
                    <li><a href="#">Search References</a></li>
                  <li><a href="#">Add/Edit Reference</a></li>
                  <li><a href="#">Generate Report</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>     
        
      </div>
    
        </div>
      </div>
    </div><!--navbar-fixed-top-->
  
  <div id="content">
  <div id="left">
  <div id="carou">
      <!--  Carousel -->
      <!--  consult Bootstrap docs at 
            http://twitter.github.com/bootstrap/javascript.html#carousel -->
    <div id="this-carousel-id" class="carousel slide">
          <div class="carousel-inner" id="img-car">
        <?php
          echo '<div class="item active">';
                  echo '<a href=""> <img src="img/5.jpg" alt="Image 1" /></a>';
                  echo '<div class="carousel-caption">';
            echo '<p></p>';
            echo '<p><a href=""> &raquo;</a></p>';
                  echo '</div>';
          echo '</div>';
        
          for($i=6;$i<9; $i++){
          echo '<div class="item">';
                  echo '<a href=""> <img src="img/'.$i.'.jpg" alt="Image 1" /></a>';
                  echo '<div class="carousel-caption">';
            echo '<p></p>';
            echo '<p><a href=""> &raquo;</a></p>';
                  echo '</div>';
          echo '</div>';
        }
        ?>  
          </div><!-- .carousel-inner -->
        <!--  next and previous controls here
              href values must reference the id for this carousel -->
      <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
    </div><!-- .carousel -->
  </div>
      <!-- end carousel -->
  
  <div class="link-gr">
      <a href="" target="_blank" class="link-pic" id="uplb"><div class="title-link">UPLB</div></a>
      <a href="" target="_blank" class="link-pic" id="ics"><div class="title-link">ICS</div></a>
      <a href="" target="_blank" class="link-pic" id="add"><div class="title-link">Mordor</div></a>
  </div>
  </div>
  
  <div id="right">
  <div class="container" id="signin">
    
    
    <table class="table table-bordered" id="announ">
      <th>Announcements</th>
      <th>Date</th>
      <tr>
        <td>We would like to inform you that ICS Lib is already up for testing!</td>
        <td>02/08/14</td>
      </tr>
      
    </table>
    </div>  
  </div>
   
  </div>
    <!--footer-->
    <div class="navbar-fixed-bottom" id="test">
     <div class="text-center"> ICS Library 2014. 
     <p class="pull-right"><u><a href="http://www.portnine.com" target="_blank">ABOUT US<u></a></p>
     <p class="pull-right1"><u><a href="http://www.portnine.com" target="_blank">FAQ<u></a></p> 
     
  </div>
  </div>

     <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
