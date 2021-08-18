
<?php 

session_start();
if(empty($_SESSION["loggeduser"]))
{
	header("Location: login.php");
}
 
?>


<?php include 'admin_header.php';
	require_once 'controllers/JobController.php';
	$jobs = getalljob();
?>
<!--All Products starts -->

<div class="center">
	 
	<div id="suggesstion"></div>
	<table border="1" style="border-collapse: collapse;">
		<thead>
			<th>Sl#</th>
			 
			<th>Title</th>
		 
			<th>Company Name</th>
			<th> Vacancy</th>
			<th>Salary</th>
			<th>Location</th>
            <th>Status</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($jobs as $p){
                    $id = $p["id"];
					echo "<tr>";
						echo "<td>$id</td>";
						 
					 
						echo "<td>".$p["title"]."</td>";
						 
                        echo "<td>".$p["cname"]."</td>";
                        echo "<td>".$p["vacancy"]."</td>";
                        echo "<td>".$p["salary"]."</td>";
                        echo "<td>".$p["location"]."</td>";
                        echo "<td>".$p["status"]."</td>";
						 
						 
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