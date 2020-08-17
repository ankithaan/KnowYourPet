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

if(isset($_POST['reg_user']))
{
	  $username =$_POST['username'];
  $email =  $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 =$_POST['password_2'];
$sql="INSERT into users  values ('$username','$email','$password_1','$password_2')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("Location:ownerlogin.php");
	

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


//mysqli_close($conn);
?>
