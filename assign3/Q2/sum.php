<?php
	$flag = true; 
	if(isset($_POST['addbutton'])){
		$x = $_POST['num1']; 	
		if(!is_numeric($x)){
			$flag = false; 
			echo "Enter Valid Value of Number 1"; 
		}
		else
			$x = $_POST['num1']; 

		$y = $_POST['num2']; 
		if(!is_numeric($y)){
			$flag = false; 
			echo "<br>Enter Valid Value of Number 2"; 
		}
		else
			$y = $_POST['num2']; 
		
		if($flag){
		$z = $x + $y;
		echo "Sum = $z";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADDITION</title>
</head>
<body>
	<h1 align="center"> SUM OF TWO NUMBERS </h1>
	<form method = "POST" action = "sum.php">
	<table align="center">
		<tr>
			<td>NUMBER 1 : 
				<input type="textbox" name="num1" placeholder="Number 1" required>
			</td>
		</tr>
		<tr>
			<td>NUMBER 2 : 
				<input type="textbox" name="num2" placeholder="Number 2" required>
			</td>	
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td align="center">
				<input type="submit" name="addbutton" value="ADD">
			</td>
		</tr>
	</table>
</form>
</body>
</html>