<?php 
session_start();
?>
<!Doctype>
<html>
<head>
<title>Login</title>
</head>
<body>
<center><h2>Sign In:</h2></center>
<form name="loginform" action="login.php" method="GET">
<table cellspacing="0" cellpadding="6" border="0" align="center">
<tr>
<td>Username:</td> 
<td>
<input type="text" name="txtname" value="" placeholder="Enter Username" autocomplete="off" required>
</td> 
</tr>


<tr>
<td>Password:</td> 
<td>
<input type="password" name="txtpassword" value="" placeholder="Enter Password" required>
</td> 
</tr>

<tr>
<td colspan="2">
<center><input type="submit" name="btnlogin" value="Login"></center>
</td> 
</tr>

</table>
</form>

<?php
if(isset($_REQUEST["btnlogin"]))
{	
$username=$_REQUEST["txtname"];
$password=$_REQUEST["txtpassword"];

include'db.php';

$qry="SELECT * FROM login WHERE username='$username' and password='$password'";

$result=mysqli_query($con,$qry);
if(mysqli_affected_rows($con)>0)
{
$row=mysqli_fetch_array($result);
$_SESSION["user_id"]=$row["uid"];
$_SESSION["user_name"]=$row["username"];
header("Location:dashboard.php");	
}
else
{
echo"<center><h2>Invalid Username or Password</h2></center>";
}	}
?>

</body>
</html>




