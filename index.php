<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css.css">
   <!-- <style type="text/css">
    	.header
    	{
    		width: 100%;
    		height: 10%;
    		background-color: lightgrey;
    	}
		.footer
		{
    		width: 100%;
    		height: 10%;
    		background-color: green;
    		position: absolute;
    		bottom: 0%;
    	}
    </style> -->
<style type="text/css" >  
body{
margin:0;
overflow-x:hidden;
}


/* Add a black background color to the top navigation */
.header {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.header a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.header a.active {
  background-color: #04AA6D;
  color: white;
}

img{
    height: 400px;
    width:300px;
    border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;

}

.footer{
background:#000;
padding:30px 0px;
font-family: 'Play', sans-serif;
text-align:center;
}

.footer .row{
width:100%;
margin:1% 0%;
padding:0.6% 0%;
color:gray;
font-size:0.8em;
}

.footer .row a{
text-decoration:none;
color:gray;
transition:0.5s;
}

.footer .row a:hover{
color:#fff;
}

.footer .row ul{
width:100%;
}

.footer .row ul li{
display:inline-block;
margin:0px 30px;
}

.footer .row a i{
font-size:2em;
margin:0% 1%;
}

@media (max-width:720px){
.footer{
text-align:left;
padding:5%;
}
.footer .row ul li{
display:block;
margin:10px 0px;
text-align:left;
}
.footer .row a i{
margin:0% 3%;
}
}
</style>
</head>

<body>
<?php
    // Include the header
    include('header.php');
?>

<img src="uploads/img2 (1).jpeg" alt="image1">
<img src="uploads/img2 (2).jpeg" alt="image2">
<img src="uploads/img2 (3).jpeg" alt="image3">
<img src="uploads/img2 (4).jpeg" alt="image4">
<img src="uploads/img2 (5).jpeg" alt="image5">
<img src="uploads/img2 (6).jpeg" alt="image6">
<img src="uploads/img2 (7).jpeg" alt="image7">
<img src="uploads/img2 (8).jpeg" alt="image8">


<?php
    // Include the footer
    include('footer.php');
?>
