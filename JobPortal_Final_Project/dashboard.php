<?php 

session_start();
if(empty($_SESSION["loggeduser"]))
{
	header("Location: login.php");
}
 
?>
<?php
		include 'admin_header.php';
	include 'controllers/DashboardController.php';
	
?>

<!--dashboard starts -->
<h3 class="text">Welcome <?php echo  $_SESSION["loggeduser"] ?> as <?php echo  $_SESSION["usertype"]?></h3></br></br>
<h3 class="text">Total Admin: <?php echo $total_Admin["total"] ?> </h3> 
<h3 class="text">Total Job Provider: <?php echo $total_JobProvider["total"] ?> </h3> 
<h3 class="text">Total Job Seeker: <?php echo $total_JobSeeker["total"] ?> </h3> 


<!--dashboard ends -->
<?php include 'admin_footer.php';?>