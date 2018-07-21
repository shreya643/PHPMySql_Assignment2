<?php
require 'connect.php';
//echo "string";
 if (isset($_POST['Submit'])) {

 	$firstname=$_POST['firstname'];
 	$lastname=$_POST['lastname'];
 	$dob=$_POST['dob'];
 	$email=$_POST['email'];
 	$Username=$_POST['Username'];
 	$Password=hash('md5',$_POST['Password']);

 	$query="INSERT INTO  user_registration(First_Name, Last_Name,DOB,Email,Username,Password) VALUES ('$firstname','$lastname','$dob','$email','$Username','$Password')";


 	mysqli_query($conn,$query);
 	
 }

?>


<html>
<title>User Registration</title>
<body style="padding:  50px; margin: 0 50px; width: 100% ">
	<h1>User Registration</h1>
	<form method="POST" action="index.php" >
		<label>First Name</label>
		<input type="text" name="firstname" placeholder="First name" required="True">
		<br>
		<label>Last Name</label>
		<input type="text" name="lastname" placeholder="Last name" required="True">
		<br>
		<label>DOB</label>
		<input type="date" name="dob" required="True" placeholder="DOB">
		<br>
		<label>Email</label>
		<input type="email" name="email" required="True" placeholder="Email">
		<br>
		<label>Username</label>
		<input type="text" name="Username" required="True" placeholder="Username">
		<br>
		<label>Password</label>
		<input type="Password" name="Password" required="True" placeholder="Password">
		<br>
		<input type="Submit" name="Submit">
	</form>
</body>
</html>