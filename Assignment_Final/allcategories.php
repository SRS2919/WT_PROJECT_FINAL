<?php
    include 'header.php';
    include 'controllers/CategoryController.php';
	$categories=getAllCategories();
	
    
?>
<html>
	<head></head>
	<h3>All Categories</h3>
	<table>
	<thead>
	    <th>Sl#</th>
		<th>Name</th>
		<th>Product Count</th>
	 
	</thead>
	<tbody>
	<?php 
	$i=1;
	foreach($categories as $c){
		$id=$c["id"];
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$c["name"]."</td>";
		   echo '<td><a href="Edit_Category.php?id='.$id.'">Edit</a></td>';
		  echo '<td><a>Delete</a></td>';
		  echo "</tr>";
		  $i++;
	}
 
	?>
	 
	</tbody>
	</table>
	</body>
</html>
 <?php include 'footer.php';?> 