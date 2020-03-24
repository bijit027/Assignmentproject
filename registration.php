

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

</head>
<body>


<?php
	require('db.php');
    
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$roll = stripslashes($_REQUEST['roll']);
		$roll = mysqli_real_escape_string($con,$roll);
		
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date,roll) VALUES ('$username', '".md5($password)."', '$email', '$trn_date','$roll')";
		$q = "INSERT INTO `person`(`roll`) VALUES ('$roll')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>

<form name="registration" action="" method="post">
<label>Username</label><br>
<input type="text" name="username" placeholder="Username" required /><br>
<label>Email</label><br>
<input type="email" name="email" placeholder="Email" required /><br>
<label>Id</label><br>
<input type="number" name="roll" placeholder="roll" required /><br>
<label>Password</label><br>
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
<br /><br />
<p> <a href='login.php'>Login</a></p>


</div>

<?php } ?>
</body>
</html>
