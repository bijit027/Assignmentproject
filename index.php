<?php


include("auth.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>

</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>


<a href="reg.php">File submit</a><br>
<a href="logout.php">Logout</a>
<div>
	<a href="change_email.php">Change Email <a>
	<a href="change_password.php">Change Password <a>
	<a href="change_name.php">Change Name <a>
</div>
<form action="submitted.php" method="post" enctype="multipart/form-data">
	
				
				<input type="submit" class="btn btn-info" value="My Submitted File" name="submit">
				
	</form>



</div>
</body>
</html>
