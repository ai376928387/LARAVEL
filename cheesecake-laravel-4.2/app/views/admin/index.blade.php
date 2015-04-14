<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/admin-style.css') }}
	<title>Cheesecake Grab</title>
</head>
<body>

	<div class="container">
		<h1>Admin Page</h1>
		<div class="row">
			<div class="col-lg-3">Links</div>
			<div class="col-lg-9">
				<h3>Login</h3>
				<hr>

				<form action="" role="form">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" name="" id="" class="form-control" placeholder="Password">
					</div>

					<input type="submit" value="Login" class="btn btn-primary">
			</div>
		</div>
	</div> <!-- end container -->


	{{ HTML::script('js/jquery-1.11.2.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>