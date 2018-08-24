<html>

<head>
    <title>BiblioteCRUD</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" id="bootstrap-css">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
	<script src="jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

	<body>
		<header>
			<nav class="navbar navbar-default navbar-static-top" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<a class="navbar-brand" href="#">BiblioteCRUD</a>
					</div>	
						
					<div class="collapse navbar-collapse" id="collapse-navbar">
						<ul class="nav navbar-nav">
							<li><a href="#sobre-nos">Acervo</a></li>
							<li><a href="#nossos-projetos">Empréstimo</a></li>
							<li><a href="#videos">Sobre Nós</a></li>
							<li><a href="#contato">Contato</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Login</b> <span class="caret"></span></a>
							<ul id="login-dp" class="dropdown-menu">
							<li>
								 <div class="row">
										<div class="col-md-12">
											 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
													<div class="form-group">
														 <label class="sr-only" for="exampleInputEmail2">E-mail</label>
														 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="E-mail" required>
													</div>
													<div class="form-group">
														 <label class="sr-only" for="exampleInputPassword2">Senha</label>
														 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Senha" required>
														 <div class="help-block text-right"><a href="">Forget the password ?</a></div>
													</div>
													<div class="form-group">
														 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
													</div>
													<div class="checkbox">
														 <label>
														 <input type="checkbox"> keep me logged-in
														 </label>
													</div>
											 </form>
										</div>
										<div class="bottom text-center">
											New here ? <a href="#"><b>Join Us</b></a>
										</div>
								 </div>
							</li>
						</ul>
					</li>
			  </ul>
					</div>
					
				</div>
			</nav>
		</header>