<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/styles.css">
	<meta charset="UTF-8">
	<title>Learning Php</title>
</head>
<body>
	<div class="container">

		<!-- Header -->
		<?php 

		?>



		<header>
			<img class="img-fluid headerImg" src="img/header.jpg" alt="">
		</header>



		<!-- Nav -->




		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="index.php">Anime</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
				</ul>
				
				<div class="form-inline my-2 my-lg-0 userForm">
					<ul class="navbar-nav mr-auto ">
						<li class="" col-lg-6>
							<a class="nav-link whiteText" href="register.php ">Registrer</a>
						</li>
						<li class="">
							<a class="nav-link disabled whiteText" href="login.php">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>



		

		<!-- Main -->






		<main class="col-md-12">
			<div class="row">

			<?php 
				require "insertArticle.php";
			?>

				<!-- <article class="col-md-4 col-lg-6 mt-5">
					<img class="img-fluid " src="img/article1.jpg" alt="">
					<h3>Overskrift 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nihil eius necessitatibus numquam quod adipisci ullam dolor possimus harum, obcaecati vitae, dolorem explicabo dolore recusandae et reiciendis cum fuga neque!</p>
				</article>

				<article class="col-md-4 col-lg-6 mt-5">
					<img class="img-fluid " src="img/article2.jpg" alt="">
					<h3>Overskrift 2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ipsa laudantium suscipit quod, eius reiciendis, cum corporis cupiditate. Nostrum, quisquam libero alias nam nulla a sequi debitis, excepturi eaque tempore.</p>
				</article>
				<article class="col-md-4 col-lg-6 mt-5">
					<img class="img-fluid " src="img/article3.jpg" alt="">
					<h3>Overskrift 3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga laudantium ut labore libero maxime voluptate facilis natus pariatur, omnis recusandae nostrum minima doloremque incidunt soluta laboriosam similique magnam. Assumenda, debitis.</p>
				</article>

				<article class="col-md-4 col-lg-6 mt-5">
					<img class="img-fluid " src="img/article1.jpg" alt="">
					<h3>Overskrift 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nihil eius necessitatibus numquam quod adipisci ullam dolor possimus harum, obcaecati vitae, dolorem explicabo dolore recusandae et reiciendis cum fuga neque!</p>
				</article>

				<article class="col-md-4 col-lg-6 mt-5">
					<img class="img-fluid " src="img/article2.jpg" alt="">
					<h3>Overskrift 2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ipsa laudantium suscipit quod, eius reiciendis, cum corporis cupiditate. Nostrum, quisquam libero alias nam nulla a sequi debitis, excepturi eaque tempore.</p>
				</article>
				<article class="col-md-4 col-lg-6 mt-5">
					<img class="img-fluid " src="img/article3.jpg" alt="">
					<h3>Overskrift 3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga laudantium ut labore libero maxime voluptate facilis natus pariatur, omnis recusandae nostrum minima doloremque incidunt soluta laboriosam similique magnam. Assumenda, debitis.</p>
				</article> -->
			</div>
		</main>






		<!-- Footer -->




		<footer class="col-md-12">
			<p class="text-center">Copyright &copy Nikolaj Holm Hansen</p>
		</footer>


	</div>
</body>
</html>