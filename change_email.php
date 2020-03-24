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
				<label>Roll</label><br>
				<input type="number" name="current" placeholder="Roll" required />
				<br>
				
				<label>New email</label><br>
				<input type="email" name="new" placeholder="New email" required />
				<br>
				
				<label>Confirm email</label><br>
				<input type="email" name="confirm" placeholder="confirm email" required />
				<br>
				<input type="submit" name="update" value="update" />
				
			</form>
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
							$update="update users set email='$new' where roll='$roll'";
							$query1=mysqli_query($con,$update);
							if($query1){
						echo"
							<script>
								alert('Update successfully');
								window.location.href='change_email.php';
							</script>
							";
							}
						}
						else{
							echo"
							<script>
								alert('Email and confirm email cannot match');
								window.location.href='change_email.php';
							</script>
							";
						}
					}
					else
					{
						echo"
							<script>
								alert('Incorrect roll');
								window.location.href='change_email.php';
							</script>
							";
						
					}
				}
			?>
			</div>
			</body>
			</html>
			
			