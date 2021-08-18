<?php 

session_start();
if(empty($_SESSION["loggeduser"]))
{
	header("Location: login.php");
}
 
?>


<?php include 'admin_header.php';
	include 'controllers/UserController.php';
	$id = $_GET["id"]; //get hyperlink 
	//$c = getuser($id);
	if(empty(getuser($id)))
	{
	
		//header("Location: alluser.php");
		echo "<script>alert('Warning! Admin cannot be Deleted')</script>";
		
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/jobportal/alluser.php">
		<?php
	}
	else
	{
		$c = getuser($id);
	}
?>
<!--edit category starts -->
<div class="center">
 
 
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 style="color: red;" >Are you sure to Delete?</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="username" value="<?php echo $c["username"];?>" class="form-control" disabled>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="delete_users" class="btn btn-danger" value="delete users" class="form-control" &tab;>
			<a href="alluser.php" > Cancel</a>
		</div>
	</form>
</div>

<!--edit category ends -->
<?php include 'admin_footer.php';?>