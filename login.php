<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Insert title here</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<section class="container login-form">
		<section>
			<form method="post" action="roles.php" method="post" role="login" >
				<img src="assets/images/logotipo.png" alt="" class="img-responsive" />

				<div class="form-group">
					<input type="usuario" name="nombre" required class="form-control" placeholder="Enter email or nickname" />
					<span class="glyphicon glyphicon-user"></span>
				</div>

				<div class="form-group">
					<input type="password" name="ps" required class="form-control" placeholder="Enter password" />
					<span class="glyphicon glyphicon-lock"></span>
				</div>

				<button type="submit" name="go" class="btn btn-primary btn-block">Login Now</button>

				<a href="#">Reset password</a> or <a href="#">create account</a>
			</form>
		</section>


			<div class="form-row">
 							<div class="form-group col-md-12">
                            	<li><a href="index.php">REGRESAR</a></li>
                            </div>
						</div>
	</section>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>