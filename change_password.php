<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		
		 <a href='index.php'>Index Page</a>
		<div name="form">
			<form name="confirm_password" method="post">
				<label>Current ID</label><br>
				<input type="number" name="current" placeholder="id" required />
				<br>
				
				<label>New password</label><br>
				<input type="password" name="new" placeholder="New pass" required />
				<br>
				
				<label>Confirm password</label><br>
				<input type="password" name="confirm" placeholder="confirm password" required />
				<br>
				<input type="submit" name="update" value="update" />
				
			</form>
			<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
			<?php
			require('db.php');
				if(isset($_POST['update'])){
				$roll =$_POST['current'];
				$new =$_POST['new'];
				$confirm =$_POST['confirm'];
					$select="select*from users where roll='$roll'";
					$query=mysqli_query($con,$select);
					$data=mysqli_fetch_assoc($query);
					$oldroll=$data['roll'];
					
					
					if($roll==$oldroll)
					{	
						if($new==$confirm){
							$update="update users set password='".md5($new)."' where roll='$roll'";
							$query1=mysqli_query($con,$update);
							if($query1){
						echo"
							<script>
								alert('Update successfully');
								window.location.href='change_password.php';
							</script>
							";
							}
						}
						else{
							echo"
							<script>
								alert('Password and confirm password cannot match');
								window.location.href='change_password.php';
							</script>
							";
						}
					}
					else
					{
						echo"
							<script>
								alert('Incorrect password');
								window.location.href='change_password.php';
							</script>
							";
						
					}
				}
			?>
			</div>
			</body>
			</html>
			