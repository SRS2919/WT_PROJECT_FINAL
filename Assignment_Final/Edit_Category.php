<?php
    include 'header.php';
    include 'controllers/CategoryController.php';
	//$id=$_GET["id"];
	//$c=getCategory($id);
    
?>
<html>
	<head></head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <b>Edit Catagory </b></td>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" > </td>
					 
				</tr>
				
				
				<tr>
					<td> <input type="submit" name="edit_category" value="Edit Catagory"> </td>
					
				</tr>
				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
<?php include 'footer.php'; ?>