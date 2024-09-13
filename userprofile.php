<?php
$id=$_REQUEST["user_id"];
include'db.php';
$qry="SELECT * FROM user_details WHERE user_id='$id'";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'header.php';?>
</head>
<body>
<img src="" alt="userimage" width="200" height="200"><br>
<h1>User NAME <?php echo $row["user_name"]; ?></h1>
<br>

    <table border="0" cellspacing="0" cellpadding="0">
<tr><td><h2>Personal Info</h2></td></tr>
        <tr>
            <td>Name: </td>
         <td>
		 <?php echo $row["user_name"]; ?>
			<input type="hidden" name="txthidden" value='<?php echo $row["user_id"]; ?>' >

         </td>
        </tr>

        <tr>
            <td>Date of Birth: </td>
         <td>
			<?php echo $row["dob"]; ?>
            
         </td>
        </tr>

<tr>
            <td>Email Id: </td>
         <td>
           <?php echo $row["email"]; ?>
         </td>
        </tr>

             
        <tr>
            <td>Contact: </td>
         <td>
            <?php echo $row["phone"]; ?>
         </td>
        </tr>


</table>

<h2>Your total Artworks Uploaded:</h2>
<?php
    include 'db.php';
	$qry= "SELECT * from artwork WHERE user_id='$id'";
	
	$total=(mysqli_query($con,$qry));
	echo".'$total'.";
?>

<br>
<a href="logout.php" target="_blank" title="logoutsite">Logout</a>
  <?php include 'footer.php';?>
</body>
</html>














</body>
</html>