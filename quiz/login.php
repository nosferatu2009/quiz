<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body style="background-image: url(b.jpg);height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;>
	<div class="container" >
		<br><h1 class="text-center text-info">Welcome to the QUIZ</h1><br>
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
				<h2 class="text-center card-header">Login form</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="user" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="Password" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">login</button>
				</form>
			</div>
			    </div>	
			<div class="col-lg-6">
				<div class="card">
				<h2 class="text-center card-header">Signin form</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="user" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="Password" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">signin</button>
				</form>
			</div>
				
			</div>
		</div>
	</div>
</body>
</html>