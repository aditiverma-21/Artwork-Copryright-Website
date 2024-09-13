
    <?php 
    session_start();
    $id='';
    if($_SESSION){
    $id=$_SESSION["user_id"];
    }
    ?>
    <div class="header">
        <nav>
		    <h1><center><img src="uploads/logo.jpg" alt="" width="110px" height="120px"><br>ARTGUARDIAN</center></h1>
			
            <ul>
                <li><a href="user_login.php" title="login">Login</a></li>
                <li><a href="userregister.php" title="signup">SignUp</a></li>
                <?php if($id){?>
                <li><a href="artwork.php" >Upload Your Artwork</a></li>
                <li><a href="copyrightnew1.php" title="copyrightsite" >Apply For Copyright</a></li>
				<li><a href="https://copyright.gov.in/Documents/Public_Notice_inviting_reviews_and_comments_of_stakeholders_on_draft_guidelines/Artistic_Works.pdf" title="copyrightgovernment" target="_blank">Apply For Government Copyright</a></li>
                <li><a href="logout.php" title="logoutsite">Logout</a></li>
                <?php } ?>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </div>
