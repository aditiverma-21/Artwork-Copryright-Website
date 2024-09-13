<?php session_start(); 
include'db.php';

$id=$_SESSION["user_id"];

$qry="SELECT * FROM user_details WHERE user_id='$id'";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);

$qry2="SELECT * FROM `category`";
$all_categories = mysqli_query($con,$qry2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Artwork</title>
</head>
<body>
     <center><h1>Upload your Artwork!!</h1></center>
	
	
    <form name="artworkregister" action="artwork.php" method="post" enctype="multipart/form-data">
    
    <table border="0" cellspacing="1" cellpadding="5" align="center" >
	<tr>
            <td>User Id: </td>
         <td>
            <input type="text" name="uid" value='<?php echo $row["user_id"]; ?>' autocomplete="off" required disabled>
			<input type="hidden" name="txthidden" value='<?php echo $row["user_id"]; ?>' >

         </td>
        </tr>
	 <tr>
            <td>Title: </td>
         <td>
            <input type="text" name="title" value="" placeholder="Title" required>
         </td>
        </tr>
		 <tr>
            <td>Description: </td>
         <td>
            <input type="text" name="desc" value="" placeholder="Description of Artwork" required >
         </td>
        </tr>
		 <tr>
            <td>Medium: </td>
         <td>
            <input type="text" name="medium" value="" placeholder="Medium" required>

         </td>
        </tr>
		<tr>
            <td>Category: </td>
         <td>
            <select name="category">
				   <?php
					while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
					?>
				<option value="<?php echo $category["category_name"];?>">
                    <?php echo $category["category_name"];?>
                </option>
				<?php 
					endwhile; 
				?>
			</select>

         </td>
        </tr>
		
		 <tr>
     <td>Upload Image of your Artwork</td>
     <td>
      <input type="file"  name="img"  accept="image/jpeg" >
      </td>
      </tr>
     <br>
		
		<tr>
         <td colspan="2" align="center">
            <input type="submit" name="btnsave" value="Save and Proceed">
            <input type="reset" name="clear" value="Clear">
         </td>
         </tr>


    </table>
    </form>
	
<?php

if(isset($_REQUEST["btnsave"]))
{
	$user_id=$_REQUEST["uid"];
	$title=$_REQUEST["title"];
	$description=$_REQUEST["desc"];
	$medium=$_REQUEST["medium"];
	$category=$_REQUEST["category"];
	$upload=$_REQUEST["img"];
	
	
	include 'db.php';
	$qry= "INSERT INTO `artwork`(`user_id`, `title`, `description`, `medium`,`category`, `image`) VALUES ('$user_id','$title','$description','$medium','$category','$upload')";
	
	if(mysqli_query($con,$qry))
	{
		echo"<center><h2>Artwork Uploaded Successfully!!!</h2></center>";
	}
	else
	{
		echo"<center><h2>Artwork not uploaded ,Error Occured!!!</h2></center>";
	}
	
	
}


?>

</body>
</html>