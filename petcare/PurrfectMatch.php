<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ownerlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ownerlogin.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Know Your Pet</title>

    <!-- Style Sheets   -->
    <!--<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta.3-dist/css/BoostrapGallery.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="BootstrapGallery.css">


    <!--Java Script and Jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/40ceb3c5f1.js"></script>


   


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="PurrfectMatch.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>       
	   <div class="container">
            <a class="navbar-brand" href="PurrfectMatch.php">Know Your Pet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="breed.php">BREEDS <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="health.php">HEALTHCARE</a>
                    </li>
					 
                   
                </ul>
                <ul  class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
                             Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ownerlogin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
                             Login</a>
                    </li>
					
                </ul>
            </div>
        </div>
    </nav>

<body background="w1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="content">
                    <h1>KNOW YOUR PET</h1>
                    
                    <hr/>
                    <a href="start.php" ><button type="button" class="btn btn-light btn-lg" ><i class="fa fa-mobile" aria-hidden="true"></i>
                        Get Started!</button>
                </div>
            </div>
        </div>
    </div>

		
</body>
</html>