<?php
function getContrastYIQ($hexcolor){
	$r = hexdec(substr($hexcolor,0,2));
	$g = hexdec(substr($hexcolor,2,2));
	$b = hexdec(substr($hexcolor,4,2));
	$yiq = (($r*299)+($g*587)+($b*114))/1000;
	return ($yiq >= 128) ? '000000' : 'ffffff';	
}

function getColor() {
	return dechex(mt_rand(0, 0xFFFFFF));	
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Codeigniter Image gallery</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">    
	<style>
		body { padding-top: 70px; }

		footer {
		    background: #fff;
		    padding: 5px 20px 0;
		    
		    position: relative;
		    
		    width: 100%;  
		    height: 30px;
		    border-top: 1px solid #e6e9ed;  
		}

		footer p {
			font-size: 85%;
			color: #777;
		}

		.thumbnail-caption {			
			text-align: center;
			margin: 4px -4px -4px;			
			min-height: 50px;

			background-color: #f5f5f5;
		    border-bottom-left-radius: 3px;
		    border-bottom-right-radius: 3px;
		    border-top: 1px solid #ddd;
		    padding: 4px 10px;		    
		}

		.thumbnail-caption h4 {
			font-size: 12px;						
			text-transform: uppercase;
			font-weight: bold;
			letter-spacing: 1px;
		}
		
		.thumbnail-caption a {
			text-decoration: none;
			color: #5d5d5d;			
		}	


		.panel-heading {
			font-weight: bolder;
			text-align: center;
			font-size: 18px;
		}	
	</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		      	<a class="navbar-brand" href="#">Cimage Gallery</a>
  			</div>  
	      	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  		<form class="navbar-form navbar-right" role="search">
			        <div class="input-group">
				      	<input type="text" class="form-control" placeholder="Search...">
				      	<div class="input-group-btn">
				      		<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				      	</div>
				    </div>
		      	</form>
		      	<ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Latest Update</a></li>
			        <li><a href="#">Popular</a></li>			        
			    </ul>
		    </div>
  						
  		</div>
  	</nav>
    <div class="container">   
    	<div class="page-header">
    		<h1>Lorem ipsum dolor color</h1>
    	</div>

    	<div class="row">
    		<div class="col-md-8 col-xs-12">
    			<div class="thumbnail">
			      <img src="http://placehold.it/768x400&text=Image-1" alt="...">			      
			    </div>
			    <div class="row">
			    	<div class="col-md-3">
			    		<div class="thumbnail">
					      <img src="http://placehold.it/200x130&text=Image-2" alt="...">			      
					    </div>
			    	</div>
			    	<div class="col-md-3 col-md-offset-6">
			    		<div class="thumbnail">
					      <img src="http://placehold.it/200x130&text=Image-3" alt="...">			      
					    </div>
			    	</div>
			    </div>
    		</div>
    		<div class="col-md-4 col-xs-12">
    			<ul class="list-group">
				  <li class="list-group-item">
				    <i class="glyphicon glyphicon-eye-open"></i> 120 View
				  </li>
				  <li class="list-group-item">
				    <i class="glyphicon glyphicon-download"></i> 100 Download
				  </li>
				</ul>

				<div class="panel panel-default">
					<div class="panel-heading">Download</div>
					<div class="panel-body">
						<a href='#' class="btn btn-lg btn-block btn-default">					
							1336x768
						</a>
						<a href='#' class="btn btn-lg btn-block btn-default">					
							1440x900
						</a>
						<a href='#' class="btn btn-lg btn-block btn-default">					
							1280x800
						</a>
						<a href='#' class="btn btn-lg btn-block btn-default">					
							2880x1800
						</a>
					</div>
				</div>
    		</div>
    	</div>

    </div>
	<footer> 
        <p class="text-center">&copy; 2015 Cimage</p>                  
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>