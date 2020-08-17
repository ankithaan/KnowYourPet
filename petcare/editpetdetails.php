<?php include('server1.php') ?>

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


<?php
 
if(isset($_POST['reg_pet']))
{    
$username=$_POST['username'];
$pname=$_POST['pname'];
$dc=$_POST['dc'];
$breed=$_POST['breed'];
$age=$_POST['age'];
$about=$_POST['about'];

   
    
       $result = mysqli_query($conn, "UPDATE petdata1 SET username='$username',pname='$pname',dc='$dc',breed='$breed' ,age='$age',about='$about' WHERE username='$username'");
        echo mysqli_error($conn);
		if($result)
		{
        
      header("Location: showpetdetails.php?email=$username");
		}
		else{
			echo "not updated";
		}
    
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
    <link rel="stylesheet" type="text/css" href="style.css">


    <!--Java Script and Jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/40ceb3c5f1.js"></script>
</head>
<body>

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
	

  <div class="header">
  	<h2>Edit Pet Details</h2>
  </div>
	
  <form method="post" action="">
  	<div class="input-group">
  	  <label>Owner Name</label>
  	  <input type="text" name="username">
  	</div>
	<div class="input-group">
  	  <label>Pet Name</label>
  	  <input type="text" name="pname">
  	</div>
  	<div class="input-group">
  	  <label>Dog/Cat</label>
  	  <input type="text" name="dc">
  	</div>
	<div class="input-group">
  	  <label>Breed</label>
  	  <input type="text" name="breed">
  	</div>
  	<div class="input-group">
  	  <label>Age</label>
  	  <input type="text" name="age">
  	</div>
  	<div class="input-group">
  	  <label>About your Pet</label>
  	  <input type="text" name="about">
  	</div>
  	
  	
	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_pet">OK</button>
  	</div>
  </form>
</body>
</html>