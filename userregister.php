<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
</head>
<body>
        <h2> <center>Register User</center></h2>
        <hr>
        <form action="" name="userregister" enctype="multipart/form-data">
       <table border="0" cellpadding="10" cellspacing="0">
        <tr>
            <td> Name:</td>
            <td>
                <input type="text" name="txtname" id="" placeholder="Enter Your Name" required>
            </td>
        </tr>
		 <tr>
            <td>User Name:</td>
            <td>
                <input type="text" name="username" id="" required>
            </td>
        </tr>
		 <tr>
            <td>Password:</td>
            <td>
                <input type="password" name="txtpassword" id="" required>
            </td>
        </tr>
		
        <tr>
            <td>Email ID:</td>
            <td>
                <input type="email" name="emailid" id="" required>
            </td>
        </tr>
        
		 <tr>
            <td>Phone Number:</td>
            <td>
                <input type="tel" id="phone" name="txtphone" >
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" id="" value="Male">Male 
                <input type="radio" name="gender" id="" value="Female">Female 
                <input type="radio" name="gender" id="" value="Others">Others
            </td>
        </tr>
 
        <tr>
            <td>Nationality:</td>
            <td>
           <select name="nationality">
  <option value="">-- select one --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="belgian">Belgian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="monacan">Monacan</option>
  <option value="nepalese">Nepalese</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="samoan">Samoan</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
            </td>
        </tr>

        <tr>
            <td>Address:</td>
            <td>
                <textarea name="address" id="" cols="30" rows="7"></textarea>
            </td>
        </tr>

            <tr>
                <td> <input type="radio" name="id" id="">Aadhar number</td>
                <td>
                    <input type="number" name="id" id="">
                </td>
            </tr>
            <tr> 
                <td> <input type="radio" name="id" id="">PAN number</td>
                <td>
                    <input type="text" name="pannumber" id="">
                </td>
            </tr>
			 <tr> 
                <td> <input type="radio" name="id" id="">Passport number</td>
                <td>
                    <input type="text" name="passportnumber" id="">
                </td>
            </tr>
            <tr>
                <td>Passport Size Photo:</td>
                <td>
                    <input type="file" name="passportphoto" id="" accept="image/*" required>
                </td>
            </tr>
            <tr>
                <td colspan="2"> 
                    <input type="submit" value="Submit" name="btnsubmit">
                </td>
            </tr>
        </table>
    </form>
	
<?php
include'db.php';
if(isset($_REQUEST["btnsubmit"]))
{
$uname=$_REQUEST["username"];	
$password=$_REQUEST["txtpassword"];
$name=$_REQUEST["txtname"];
$email=$_REQUEST["emailid"];
$phoneno=$_REQUEST["txtphone"];
$gender=$_REQUEST["gender"];
$nationality=$_REQUEST["nationality"];
$address=$_REQUEST["address"];
$id=$_REQUEST["id"];
$photo=$_REQUEST["passportphoto"];

$qry22="INSERT INTO user_details(user_name,password,name,email_id, phone, gender, nationality, address, id_type, photo) 
VALUES('$uname','$password','$name','$email','$phoneno','$gender','$nationality','$address','$id','$photo')";

	$newData= mysqli_query($con,$qry22);
if($newData)
{
	header("Location:home.php");	
echo"<center><h2>Record Saved Successfully!!!</h2></center>";

}
else
{
echo"<center><h2>Error Occured!!</h2></center>";
}	
}
?>
</body>
</html>