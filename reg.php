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
		<?php
		
		?>
		<body>
		
			<div class="container">
			<br> 
			
				<h1 class="text-white bg-dark text-center">
				
							Registration Form
				</h1>
				
				
				<div class="col-lg-8 m-auto d-block">
				
				<form action="upload.php" method="post" enctype="multipart/form-data"
				
				<!--for name-->
				
				<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
				
				
				
		
				
				<!--for file-->
				
				<div class="form-group">
							<label for="file">Profile picture:</label>
							<input type="file" class="form-control" id="file" name="file">
				</div>
				
				
				
				<input type="submit" class="btn btn-info" value="Submit Button" name="submit">
				
				
				
				
				
				
				
				 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
				
				
				</form>
				</div>
			</div>
		</body>
	</html>