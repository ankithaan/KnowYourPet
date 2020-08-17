<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"kyp");
if($db)
{
echo "Connected Succesfully!";
}
else{
echo "Not Connected";
}
?>

<?php
//ini_set("display_errors",1);

/*$sql3="select id from sample order by id desc";
$result=mysqli_query($conn,$sql3);
$row=mysqli_fetch_array($result);
$id=$row['id']+1;*/

if(isset($_POST['reg_pet']))
{
   $username =$_POST['username'];
	  $pname =$_POST['pname'];
  $dc =$_POST['dc'];
  $breed =  $_POST['breed'];
  $age = $_POST['age'];
  $about =$_POST['about'];
$sql="INSERT into petdata1 values ('$username', '$pname', '$dc','$breed','$age','$about')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("Location:PurrfectMatch.php");
	

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


//mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Pet Details</h2>
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
  	
  	<p>
  		Another Pet? <a href="petdetails.php">Click Here</a>
  	</p>
	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_pet">OK</button>
  	</div>
  </form>
</body>
</html>