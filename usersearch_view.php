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
		
        </div>
      </div>
    </div><!--navbar-fixed-top-->
	
	<div id="content">
             <div class="col-sm-offset-1" id="search_top">

        <select class="dropdown">
                    <option value="title">Title</option>
                    <option value="author">Author</option>
                    <option value="isbn">ISBN</option>
                    <option value="course_code">Course Code</option>
                    <option value="publisher">Publisher</option>
                    <form action="" method="">
          <input type="text" name="query" size="40" placeholder="">
          <input type="submit" name="search2" class="btn btn-primary" value="Search"/>
          <a href="#advanceSearch"data-toggle="modal"> <input type="submit" name="aSearch" class="btn btn-primary"  value="Advanced Search"/></a>
         </div>
        </form>
                  </select>



                  <div id="advanceSearch" class="modal fade in" role="dialog">  
        <div class="modal-dialog">  
          <div class="modal-content">
            <div class="modal-header">  
              <a class="close" data-dismiss="modal">&times;</a>
            <h4>Advanced Search</h4>  
            </div>
            <div class="modal-body">
              <form name="aSearch" method='post' class = 'form-horizontal' style = 'margin-bottom: 0px;'>
              
              <div class="row">
                <div class="col-lg-10">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Course Code</a></li>
                        <li><a href="#">Title</a></li>
                        <li><a href="#">Author</a></li>
                        <li><a href="#">Publisher</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control">
                  </div><!-- /input-group -->
                </div><!-- /.col-lg-10 -->
                <br/><br/>
                <div class="col-lg-10">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Course Code</a></li>
                        <li><a href="#">Title</a></li>
                        <li><a href="#">Author</a></li>
                        <li><a href="#">Publisher</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control">
                  </div><!-- /input-group -->
                </div><!-- /.col-lg-10 -->
                <br/><br/>
                <div class="col-lg-10">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Course Code</a></li>
                        <li><a href="#">Title</a></li>
                        <li><a href="#">Author</a></li>
                        <li><a href="#">Publisher</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control">
                  </div><!-- /input-group -->
                </div><!-- /.col-lg-10 -->
                <br/><br/>
                
                <div class="col-lg-10">
                  <div class="input-group">
                    <span class="input-group-addon">Exact Match</span>
                    <input type="text" class="form-control">
                  </div>  
                </div>
                <br/>
                </br/>
                <div class="col-lg-10">
                  <div class="input-group">
                    <span class="input-group-addon">Search Expression</span>
                    <input type="text" class="form-control">
                  </div>  
                </div>
              </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" name="search">Search</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     </div> 

    </div>
    <br>
    <div id="table_searchlib">
    <select class="dropdown">
                    <option value="username">Sort by:</option>
                    <option value = 'title'>Title</option>
        <option value = 'author'>Author</option>
        <option value = 'access'>Access Type</option>
        <option value = 'category'>Reference Type</option>
        <option value = 'course_code'>Course Code</option>
        <option value = 'times_borrowed'>Number of times borrowed</option>
        <option value = 'total_stock'>Total stock</option>
                    <form action="" method="">
    </select>
     <select class="dropdown">
        <option value = 'ASC'>Ascending</option>
        <option value = 'DESC'>Descending</option>
                    <form action="" method="">
    </select>
    <table class="table">
        <thead>
          <tr>
            
            <th><input type="checkbox" name="select" value="selectall"></th>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Category</th>
            <th>Description</th>
            <th>Publisher</th>
            <th>Publication</th>
      <th>Access Type</th>
      <th>Course Code</th>
      <th>Total Available</th>
      <th>Total Stock</th>
      <th>Times Borrowed</th>
     

          </tr>
        </thead>
        <tbody>
          <tr class="active">
            <td>
            <form>
            <input type="checkbox" name="vehicle" value="Bike">
            </form></td>
            <td>1</td>
            <td>TC7</td>
            <td>Leithold</td>
             <td>100082989</td>
            <td>Book</td>
            <td>Math 17</td>
            <td>Book Publisher</td>
            <td>Book Publishing Company</td>
            <td>Student</td>
            <td>CS17</td>
            <td>1</td>
            <td>2</td>
            <td>1</td>
           
            
            
          </tr>
          <tr>
           <td>
            <form>
            <input type="checkbox" name="vehicle" value="Bike">
            </form></td>
             <td>2</td>
            <td>TC7</td>
            <td>Leithold</td>
             <td>100082989</td>
            <td>Book</td>
            <td>Math 17</td>
            <td>Book Publisher</td>
            <td>Book Publishing Company</td>
            <td>Student</td>
            <td>CS17</td>
            <td>1</td>
            <td>2</td>
            <td>1</td>
            
            
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
    <!--footer-->
   

	
	
	</div>
    <!--footer-->
    <div class="navbar-fixed-bottom" id="test">
     <div class="text-center"> ICS Library 2014. 
     <p class="pull-right"><u><a href="http://www.portnine.com" target="_blank">ABOUT US<u></a></p>
     <p class="pull-right1"><u><a href="http://www.portnine.com" target="_blank">FAQ<u></a></p> 
     
	</div>
	</div>

 

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
      
            


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
