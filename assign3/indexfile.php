<?php
include('config.php');
?>
<?php 
	if(isset($_POST['submit'])){
		$username = $_POST['username']; 
		$email = $_POST['email']; 
		$gender = $_POST['gender']; 
		$city = $_POST['city']; 
		$sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username ', '$email', '$gender', '$city')";
		$a = mysqli_query($conn , $sql);
	}

	else{
		echo "Please click on submit button to submit data ...."; 
	}

?>
<form method="post">	
<table id = "frm" align = "center" border = "3" cellspacing = " 20">

	<!-- 1 -->
	<tr><td>Username <td><input type="text" placeholder="Enter Username" name = "username" required></td></tr>

	<!-- 2 -->
	<tr><td>Email <td><input type="email" placeholder="Enter Email" name = "email" required></td></tr>
	
	<!-- 3 -->
	<tr><td>Gender 
		<td>
			<input type="radio" id="Male" name="gender" value = "Male">
			<label for="Male">Male</label><br>
			<input type="radio" id="Female" name="gender" value = "Female">
			<label for="Female">Female</label><br>
		</td>
	</td>
</tr>

	<!-- 4 -->
	<tr><td>City 
		<td><select name = "city"required>
			<option>Select City</option>
			<option value="Dehradun">Dehradun</option>
			<option value="Delhi">Delhi</option>
			<option value="Jaipur">Jaipur</option>
		</select>
	</td></tr>
	

	<tr><td><input type="Submit" name = "submit" ></td></tr>
</div>
</form>