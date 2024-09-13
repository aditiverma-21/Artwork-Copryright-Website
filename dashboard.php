<?php session_start();
if(isset($_SESSION["user_name"]) && isset($_SESSION["password"]))
{
?>
<!Doctype>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
<?php
echo"<center><h2>Welcome User ".$_SESSION["username"].":</h2></center>";
?>
<center><a href="copyrightnew.php">Copyright</a></center>
<center><a href="logout.php">Sign Out</a></center>
</body>
</html>
<?php
}
else
{
header("Location:index.php");
}
?>




