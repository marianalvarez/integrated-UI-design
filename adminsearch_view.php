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
        <link rel="stylesheet" href="css/template.css">
        <link rel="stylesheet" href="css/main_login.css">
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
          <div id="nav-in">
        <div class="navbar-collapse collapse">
            <ul class="nav nav-pills">
              <li class="active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> name_of_admin <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">View Profile</a></li>
                  <li><a href="#">Search Accounts</a></li>
                  <li><a href="#">Add/Edit Accounts</a></li>
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
  <!--content area-->
  <div id="table_search">
    <select class="dropdown">
                    <option value="username">Sort by:</option>
                    <option value="student_number">Student Number</option>
                    <option value="employee_number">Employee Number</option>
                    <option value="first_name">First Name</option>
                    <option value="last_name">Last Name</option>
                    <form action="" method="">
    </select>
    <table class="table">
        <thead>
          <tr>
            
            <th><input type="checkbox" name="select" value="selectall"></th>
            <th>No.</th>
            <th>Employee Number</th>
            <th>Student Number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Account Type</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="active">
            <td>
            <form>
            <input type="checkbox" name="vehicle" value="Bike">
            </form></td>
            <td>1</td>
            <td></td>
            <td>2011-xxxxx</td>
            <td>Alvarez</td>
            <td>Moses</td>
            <td>Maligaya</td>
            <td>S</td>
            <td><span class="glyphicon glyphicon-new-window"></span></td>
            
          </tr>
          <tr>
           <td>
            <form>
            <input type="checkbox" name="vehicle" value="Bike">
            </form></td>
            <td>2</td>
            <td>10002020</td>
            <td></td>
            <td>Alvarez</td>
            <td>Moserian</td>
            <td>Maligaya</td>
            <td>F</td>
              <td><span class="glyphicon glyphicon-new-window"></span></td>
          </tr>
          <tr class="active">
           <td>
            <form>
            <input type="checkbox" name="vehicle" value="Bike">
            </form></td>
            <td>3</td>
            <td>1128192</td>
            <td></td>
            <td>Alvarez</td>
            <td>Moses</td>
            <td>Maligaya</td>
            <td>L</td>
             <td><span class="glyphicon glyphicon-new-window"></span></td>
          </tr>
        </tbody>
      </table>

      <div class="pagination_table">
      <ul class="pagination">
        <li><a href="#">«Previous</a></li>
        <li><a class="active">1</a></li>
        <li><a href="?page=2">2</a></li>
        <li><a href="?page=3">3</a></li>
        <li><a href="?page=4">4</a></li>
        <li><a href="?page=5">5</a></li>
        <li><a href="?page=6">6</a></li>
        <li><a href="?page=7">7</a></li>
        <li><a href="#">Next »</a></li>
    </ul>
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
