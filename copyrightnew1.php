<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Copyright Form</title>
</head>
<body>
    <form name="Copyrightnew" method="post">
    <h1>Get Your Copyright from here!!</h1>
    <table border="0" cellspacing="1" cellpadding="5">
<!--tr><td><h2>Personal Details</h2></td></tr>
        <tr>
            <td>Name: </td>
         <td>
            <input type="text" name="txtname" value="" placeholder="Enter name here" autofocus>
         </td>
        </tr>

        <tr>
            <td>Date of Birth: </td>
         <td>
            <input type="date" name="dob" value="" required>
         </td>
        </tr>

       

        <tr>
            <td>Email Id: </td>
         <td>
            <input type="email" name="txtemail" value="" placeholder="mail-id">
         </td>
        </tr>

             
        <tr>
            <td>Contact: </td>
         <td>
            <input type="tel" name="txttel" value="" placeholder="Your phone number">
         </td>
        </tr>


        <tr>
            <td>Gender:</td>
         <td>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
           
         </td>
        </tr>


        <tr>
            <td>Nationality: </td>
         <td>
            <input type="text" name="txtnationality" value="" placeholder="Nationality">
         </td>
        </tr>        

        <tr>
            <td>Address</td>
            <td>
                <textarea name="txtaddress" rows="5" cols="20" placeholder="Enter your Address"></textarea>
           </td>
            </tr>
     
        <tr>
            <td>Pincode: </td>
         <td>
            <input type="number" name="pincode" value="" autocomplete="off">
         </td>
        </tr>
-->
        <tr><td><h2>Work Details</h2></td></tr>
        <tr>
            <td>Title: </td>
         <td>
            <input type="text" name="txttitle" value="" placeholder="Title" required>
         </td>
        </tr>
<tr>
<td>Category of the ArtWork</td>
<td>
<input type="radio" name="cat1" value="Painting">Painting<br>
<input type="radio" name="cat1" value="Photography">Photography<br>
<input type="radio" name="cat1" value="Statue">Statue<br>
<input type="radio" name="cat1" value="Best out of Waste">Best out of Waste<br>
<input type="radio" name="cat1" value="Sketches">Sketches<br>

</td>


    </tr>
        <tr>
            <td>Medium: </td>
         <td>
            <input type="text" name="txtmedium" value="" placeholder="Medium" required>

         </td>
        </tr>
        <tr>
            <td>Description: </td>
         <td>
            <input type="text" name="txtdesc" value="" placeholder="Description of Artwork" required >
         </td>
        </tr>

      <tr>
            <ul>
            <td>Art Published(Anywhere): </td>
         <td>
            <input type="radio" name="published" value="Yes">Yes<br>
            <ul>
                <li>Area of Publication:</li>
                <input type="text" name="txtpubl">
                <li>Year of Publication:</li>
                <input type="date" name="date">
                <li>Publishing Authority:</li>
                <input type="text" name="txtaut">
            </ul><br>
        </ul>
             <input type="radio" name="published" value="No" align="left">No<br>
             
         </td>
        </tr>
        


    <tr>
        <td>Does the Artwork follows THE COPYRIGHT ACT 1957 ?</td>
     <td>
        <input type="radio" name="ACT" value="Yes">Yes<br>
        <input type="radio" name="ACT" value="No">No
       
     </td>
    </tr>

</tr>
<tr>
    <td>Awards(If Any): </td>
 <td>
    <input type="text" name="txtawd" value="" placeholder="Award Name">
 </td>
</tr>
  

    <tr>
        <td>Registered under THE DESIGN ACT 2000 ?</td>
     <td>
        <input type="radio" name="ACT2" value="Yes">Yes
        <input type="radio" name="ACT2" value="No">No
       
     </td>
    </tr>
    
    <tr><td><h2>Identification Proof</h2></td></tr>
    <tr>
        <td>Identification: </td>
   
     
        <td>
         <select name="IdentificationProof">
	 <option value="AadharCard">AadharCard</option>
     <option value="Pancard">Pancard</option>
     <option value="Driving License">Driving License</option>
     <option value="Passport">Passport</option>
   
     </select>
     </td>
	</tr>
    <tr>
	<td>Enter your Id proof No.</td>
	 <td>
	 <input type="text" name="txtiproof" value="" placeholder="Aadhar/Pan/License/Passport No">
     </td>
	</tr>

     

     <tr>
     <td>Upload Image of your Artwork (Only JPEG file)</td>
     <td>
      <input type="file"  name="image"  accept=".jpeg" >
      </td>
      </tr>
     <br>




      <tr>
         <td colspan="2">
            <input type="submit" name="btnsave" value="Save and Proceed">
            <input type="reset" name="clear" value="Clear">
         
         
         </td>
         </tr>


    </table>
    </form>
<?php
if(isset($_REQUEST["btnsave"]))
{
	$title=$_REQUEST["txttitle"];
	$category=$_REQUEST["cat1"];
	$medium=$_REQUEST["txtmedium"];
	$description=$_REQUEST["txtdesc"];
	$published=$_REQUEST["published"];
	$area=$_REQUEST["txtpubl"];
	$year=$_REQUEST["date"];
	$authority=$_REQUEST["txtaut"];
	$act1957=$_REQUEST["ACT"];
	$awards=$_REQUEST["txtawd"];
	$act2000=$_REQUEST["ACT2"];
	$upload=$_REQUEST["image"];

	
   include'db.php';
   $qry= "INSERT INTO `copyright`(`title`, `category`, `description`, `medium`, `published`, `area`, `year`, `authority`, `design_act`, `copyright_act`,`awards`,`work_photo`) VALUES ('$title','$category','$description','$medium','$published','$area','$year','$authority','$act1957','$act2000','$awards','$upload')";
	
	if(mysqli_query($con,$qry))
	{
		echo"<center><h2>SUCCESSFULLY APPLIED FOR COPYRIGHT!!!</h2></center>";
	}
	else
	{
		echo"<center><h2>ERROR OCCURED!!!</h2></center>";
	}
	
	
}


?>
<script>
function handleIdentification(){
	
}


</script>
</body>
</html>