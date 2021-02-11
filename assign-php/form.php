
<?php
	if(isset($_POST['Name'])){
		$name = $_POST['Name'];
	}
	else{
		$name = ''; 
	}
	if (isset($_POST['Email'])) {
		$email = $_POST['Email'];
	}
	else{
		$email = ''; 
	}
	if (isset($_POST['Contact'])) {
		
		$contact = $_POST['Contact'];
		if(strlen($contact)<10){
			echo "<script>alert('contact number should contains 10 digit')</script>" ;

		}
		if(! (is_numeric($contact))){
			echo "<script>alert('contact number should contains numeric values')</script>" ;
		}
	}
	else{
		$contact = ''; 
	}
	if (isset($_POST['City'])) {
		$city = $_POST['City'];
	}
	else{
		$city = '';  
	}
	if (isset($_POST['Course'])) {
		$course = $_POST['Course'];
	}
	else{
		$course = '';  
		 
	}
	if (isset($_POST['Interest'])) {
		$interest = $_POST['Interest'];
		$interest = implode(" , ", $interest); 
		if (substr_count($interest,",")<1){
			echo "<script>alert('select atleast two intrests')</script>" ;
		}
	    
	}
	else{
		$interest = '';  
    }
    
  
    
?>

<form method="post">	
<table id = "frm" align = "center" border = "2" cellspacing = " 20">
	<!-- 1 -->
	<tr><td>Name <td><input type="text" placeholder="Enter Name" name = "Name" value = "<?php echo $name?>" required></td></tr>
	<!-- 2 -->
	<tr><td>Email <td><input type="email" placeholder="Enter Email" name = "Email" value = "<?php echo $email?>" required></td></tr>
	<!-- 3 -->
	<tr><td>Contact <td><input  type="tel"  minlength="10" maxlength="10"  placeholder="Enter Contact" name = "Contact" value = "<?php echo $contact?>"required></td></tr>
	<!-- 4 -->
	<tr><td>City 
		<td><select name = "City"required>
			<option>Select City</option>
			<option value="Dehradun">Dehradun</option>
			<option value="Delhi">Delhi</option>
			<option value="Jaipur">Jaipur</option>
		</select>
	</td></tr>
	<!-- 5 -->
	<tr><td>Course <td><input type="text" placeholder="Enter Course Name" name = "Course" required></td></tr>
	<!-- 6 -->
	<tr><td>Interests
	<td>
		Programming <input type="checkbox" name="Interest[]" value = "Programming">
		Coding <input type="checkbox" name="Interest[]" value = "Coding">
		Reading <input type="checkbox" name="Interest[]" value = "Reading">
		Music <input type="checkbox" name="Interest[]" value = "Music">
		Swimming <input type="checkbox" name="Interest[]" value = "Swimming">
		Day Dreaming <input type="checkbox" name="Interest[]" value = "Day Dreaming">
	</td></tr>
	<!-- 7 -->
	<tr><td>Submit ? <td><input type="Submit" name = "Sub"></td></tr>

</table>
<div  border="">
<table  border="2" cellpadding = "10" align="center">
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Contact</td>
		<td>City</td>
		<td>Course</td>
		<td>Interest</td>
	</tr>
	<tr>
		<td><?php echo $name ?></td>
		<td><?php echo $email ?></td>
		<td><?php echo $contact ?></td>
		<td><?php echo $city ?></td>
		<td><?php echo $course ?></td>
		<td><?php echo $interest ?></td>
	</tr>
</table>
</div>
</form>s