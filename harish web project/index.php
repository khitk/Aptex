<!DOCTYPE html>
<html lang="en">
<head>
  <title>singin and signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">




<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.parallax {
 
  background-image: url("21.jpg");

  
  min-height: 300px; 

  
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>







</head>
<body>




<div class="parallax"></div>

<div style="height:100px;background-color:white;font-size:15px">




<br>
<br>
<div class="jumbotron">

<div class="container">
<center><h1>WELCOME</h1>




      
    <p>TAKE UP THE APTITUDE TEST AND DON'T FORGET TO CHECK WHERE YOU HAVE GONE WRONG.<br>BEST OF LUCK):</p>
  </div>


<!--<div class="container">
  <h3>Tooltip Example</h3>
  <p>Tooltips are not CSS-only plugins, and must therefore be initialized with jQuery: select the specified element and call the tooltip() method.</p>
  <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>-->


<div class="container">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="11.jpg"  style="width:100%;">
      </div>

      <div class="item">
        <img src="12.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="16.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="14.jpg" style="width:100%;">
      </div>
    
     

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<BR><BR><BR><BR>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			 <div class="container">
  
		</div>
    </div>
</div>




	<div class="container">
		<div class="row">
			     <div class="col-sm-6">
					  <div class="panel panel-info">
                      <div class="panel-heading">Signin Form</div>
						<div class="panel-body">
						<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						
						
						?>
							  <form role="form" action="signin_sub.php" method="post">
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
					  </div>
				 
				   <div class="col-sm-6">
							<div class="panel panel-info">
								
								<div class="panel-heading">Signup Form</div>
							<div class="panel-body">
							<?php 
							if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo "<mark>Your registration successfully done</mark>";
							} 
							?>
							  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data"  >
							  	<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="form-control" name="n" id="name" placeholder="Enter name">
								</div>
								<div class="form-group">
								  <label for="email">Email:</label>;
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
								<div class="form-group">
								  <label for="pwd">Upload your iamge</label>
								  <input type="file" class="form-control" name="img" >
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
			      </div>
	   </div>
   </div>
   


<div class="container">
  <CENTER><h2>ABOUT TEST</h2>
  
  <CENTER><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">DETAILS</button><BR><BR><BR><BR><BR><BR><BR>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Test details</h4>
        </div>
        <div class="modal-body">
          <p>Sign in to take up the test.<br>Select the category and answer the questions.<br>check the solutions to know where you have gone wrong.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>   
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
