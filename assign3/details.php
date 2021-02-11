<?php 
	include('config.php');
?>
<?php 
	$sql = "SELECT * FROM `users`"; 
	$result = mysqli_query($conn , $sql); 
	if($result->num_rows > 0){
?>
	<table border = "1" align="center">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Gender</th>
				<th>City</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while($row = $result->fetch_array()){?>
			<tr>
				<td><?php echo $row[0]?></td>
				<td><?php echo $row[1]?></td>
				<td><?php echo $row[2]?></td>
				<td><?php echo $row[3]?></td>
				<td><?php echo $row[4]?></td>
				<td><input type="button" name="Edit" value = "Edit"></td>
				<td><input type="button" name="Delete" value = "Delete"></td>
			</tr>
			<?php } ?>	
		</tbody>
	</table>
	<?php } 
?>

