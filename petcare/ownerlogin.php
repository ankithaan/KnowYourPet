<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"kyp");
if($db)
{
//echo "connected succesfully";
}
else{
echo "not connected";
}
?>

<?php
session_start();

if (isset($_POST['login_user']))
{
//mysqli_connect('localhost','root','') or die(mysqli_error());
     //mysqli_select_db('wedding') or die(mysqli_error());
     $username=$_POST['username'];
     $password=$_POST['password'];
if($username!=''&&$password!='')
 {
   $query=mysqli_query($conn,"select * from users where username='".$username."' and password='".$password."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['username']=$username;
    header('location:PurrfectMatch.php');
   }
   else
   {
    echo "Entered username and password is incorect";
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>