<?php
$id=$_REQUEST["user_id"];
include'db.php';
$qry="SELECT * FROM user_details WHERE userid='$id'";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin| Site Name</title>
</head>
<body>
<img src="" alt="userimage" width="200" height="200"><br>
<h1>Admin NAME</h1>
<br>
<h1>Personal Info</h1>


 <form>
    <table border="0" cellspacing="0" cellpadding="0">
<tr><td><h2>Personal Details</h2></td></tr>
        <tr>
            <td>Name: </td>
         <td>
            <input type="text" name="txtname" value="'<?php echo $row["user_name"]; ?>' " placeholder="Enter name here" autofocus>
			<input type="hidden" name="txthidden" value='<?php echo $row["user_id"]; ?>' >

         </td>
        </tr>

        <tr>
            <td>Date of Birth: </td>
         <td>
            <input type="date" name="dob" value='<?php echo $row["dob"]; ?>' required>
         </td>
        </tr>

<tr>
            <td>Email Id: </td>
         <td>
            <input type="email" name="txtemail" value='<?php echo $row["email_id"]; ?>'placeholder="mail-id">
         </td>
        </tr>

             
        <tr>
            <td>Contact: </td>
         <td>
            <input type="tel" name="txttel" value='<?php echo $row["phone"]; ?>'placeholder="Your phone number">
         </td>
        </tr>

</form>
</table>

<h2>Total Artworks Uploaded in the site:</h2>
<?php

	$con=mysqli_connect("localhost","root","","artcopyright");
	$qry= "SELECT*from artwork";
	
	$total=(mysqli_query($con,$qry));
	echo".'$total'.";
?>

<br>
<a href="logout.php" target="_blank" title="logoutsite">Logout</a>
    
</body>
</html>



</body>
</html>