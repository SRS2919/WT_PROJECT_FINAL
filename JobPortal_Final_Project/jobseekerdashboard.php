<?php 

session_start();
if(empty($_SESSION["loggeduser"]))
{
	header("Location: login.php");
}
 
?>
<?php
		include 'jobseeker_header.php';
	include 'controllers/DashboardController.php';
	
?>


<!--dashboard starts -->
<h3 class="text">Welcome <?php echo  $_SESSION["loggeduser"] ?> as <?php echo  $_SESSION["usertype"]?></h3></br></br>
 
<!--dashboard ends -->
<?php include 'admin_footer.php';?>