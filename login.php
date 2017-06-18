<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<!DOCTYPE html>
	<html lang="en">
	<head> 
		<!-- Boostrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Navn</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Indsæt dit navn"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label mt-2">Adgangskode</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password1"  placeholder="Indsæt din adgangskode"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label mt-2">Bekræft adgangskode</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="password2"  placeholder="Indsæt din adgangskode igen"/>
								</div>
							</div>
						</div>
						

						<div class="login-register">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
						</div>

						<div class="form-group mt-3 ">
							<a class="registerUser text-center" href="register.php">Register</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
	</html>
</body>
</html>