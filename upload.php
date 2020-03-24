<?php
include("auth.php");

?>
<!DOCTYPE html>
<html>
		 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
	
	<body>
	<a href="registration.php"><button style="margin-top:10px;" type="button" class="btn btn-secondary">Home</button></a>
	
	<br>
		
		<br>
		<h1 class="text-white bg-dark text-center">Group Name with Project File</h1>
		<br>
		
		<div class="table-responsive">
		
		<table class="table table-info table-bordered table-striped table-hover">
			
			<thead>
				<th>Serial</th>
				
				<th>Name</th>
				
				<th>email</th>
				
				<th>file</th>
			</thead>
			
			<tbody>
			
				<?php
					
					$con = mysqli_connect('localhost','root');
					mysqli_select_db($con,'register');
					
					if(isset($_POST['submit'])){
						
						
						$files = $_FILES['file'];
						$username = $_SESSION['username'];
										  echo $username;

						
						//print_r($username);
						//echo "<br>";
						//print_r($files);
						
						
						$filename = $files['name'];
						$fileerror = $files['error'];
						$filetmp = $files['tmp_name'];
						
						
						$fileext = explode('.',$filename);
						$filecheck = strtolower(end($fileext));
						$fileextstored = array('png', 'jpg', 'jpeg', 'zip', 'zar','rar');
						
						
						if(in_array($filecheck,$fileextstored)){
							
							$destinationfile = 'upload/'.$filename;
							move_uploaded_file($filetmp,$destinationfile);
							
							
							
							$q = "INSERT INTO `person`(`name`,`file`) VALUES ('$username','$destinationfile')";
							$query =mysqli_query($con,$q);
							
							$displayquery = "SELECT * FROM users  JOIN person ON users.username = person.name where users.username='$username'";
							$querydisplay = mysqli_query($con,$displayquery);
							
							//$row = mysqli_num_rows($querydisplay);
							
							
							while( $result = mysqli_fetch_array($querydisplay)){
								?>
								
								<tr>
									
									<td>
										<?php
										echo $result['id'];
										?>
									</td>
									<td>
										<?php
										echo $result['username'];
										?>
									</td>
									<td>
										<?php
										echo $result['email'];
										?>
									</td>
									<td>
										<a href="<?php echo $result['file']?>"><?php echo $result['file']?></a>
									
									</td>
								</tr>
								<?php
							}
							
						}
						else
							echo "extension is not matching";
					}
				?>
			
			</tbody>
		
		</table> 
		
		
		
		
		
		
		
					
				 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
				
		
		</div>
	
	</body>
</html>