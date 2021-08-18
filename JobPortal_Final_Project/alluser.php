
<?php 

session_start();
if(empty($_SESSION["loggeduser"]))
{
	header("Location: login.php");
}
 
?>


<?php include 'admin_header.php';
	require_once 'controllers/UserController.php';
	$users = getalluser();
?>
<!--All Products starts -->

<div class="center">
	 
	<div id="suggesstion"></div>
	<table border="1" style="border-collapse: collapse;">
		<thead>
			<th>Sl#</th>
			 
			<th>User Name</th>
		 
			<th>gender</th>
			<th> email</th>
			<th>address</th>
			<th>usertype</th>
            <th>Delete</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($users as $p){
                    $id = $p["id"];
					echo "<tr>";
						echo "<td>$id</td>";
						 
					 
						echo "<td>".$p["username"]."</td>";
						 
                        echo "<td>".$p["gender"]."</td>";
                        echo "<td>".$p["email"]."</td>";
                        echo "<td>".$p["address"]."</td>";
                        echo "<td>".$p["usertype"]."</td>";
						 
                        echo '<td><a href="deleteuser.php?id='.$id.'" class="btn btn-danger">Delete</a></td>';
						 
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
 
<!--Products ends -->
<?php include 'admin_footer.php';?>