<?php 
	session_start();
	
?>

<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jober Desk | Responsive Job Portal Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <!-- All Plugin Css --> 
		<link rel="stylesheet" href="css/plugins.css">
		
		<!-- Style & Common Css --> 
		<link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
	
    <body>
	
		<!-- Navigation Start  -->
		<nav class="navbar navbar-default navbar-sticky bootsnav">

			<div class="container">      
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" alt=""></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li><a href="index.html">Home</a></li> 
							<li><a href="login.php">Login</a></li>
							<li><a href="companies.html">Companies</a></li> 
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse</a>
								<ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
									<li class="active"><a href="browse-job.html">Browse Jobs</a></li>
									<li><a href="company-detail.html">Job Detail</a></li>
									<li><a href="resume.html">Resume Detail</a></li>
									
								</ul>
							</li>
							<li>&nbsp</li><li>&nbsp</li>
							<li><a href="sair.php">Sair</a></li>
						</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
		</nav>
		<!-- Navigation End  -->
		
	
    <!-- Main jumbotron for a primary marketing message or call to action -->
	<section class="inner-banner">
		<div class="container">
			<div class="caption">
				<h2>Cadastre-se!</h2>
				<p>Cadastro somente para colaboradores da empresa</p>
			</div>
		</div>
	</section>
	
	<section class="jobs"  style="background-color: #f5f5f5">
		<div class="container">
			<div class="hero-wrap hero-wrap-2">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-1 mt-5">
              
              
            </div>
          </div>
        </div>
	  </div>
	  	
      <div class="ftco-section bg-light" >
        <div class="container">
          <div class="row">
         
            <div class="col-md-12 col-lg-12 mb-5">
            
            <form action="core/usuarios-emp.php" method="POST" class="p-5 bg-white">
				<div class="row form-group">

				<div class="col-md-12 mb-3 mb-md-0">
					<?php 
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
					?>
				</div>
				</div>			
  
                <div class="row form-group mb-4">
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold">Perfil do usuário </label>
                    <select class="form-control" name="perfil">
                        <option class="hidden"  selected disabled>Selecione um perfil --></option>
                        <option value="Administrador">Administrador</option>
                        <option value="Publicar">Publicar</option>
                        <option value="Visualizar">Visualizar</option>

                    </select>
                    
                
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="">
                  </div>
            
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold" >Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" placeholder="">
                  </div>
                </div>
  
                <div class="form-row">
                  <div class="col-md-12"><label>Email</label></div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <input type="text" class="form-control" name="email" placeholder="email@site.com.br">
                  </div>
                </div>
                <!-- senha -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold" >Senha</label>
                    <input type="password"  name="senha" class="form-control" placeholder="">
                  </div>
            
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold">Repetir Senha</label>
                    <input type="password" name="repetir_senha" class="form-control" placeholder="">
                  </div>
                </div>

                
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Cadastrar" class="btn btn-primary  py-2 px-5">
                  </div>
                </div>
  
    
              </form>
            </div>	
			<!-- fim novo -->
			
		</div>
	</section>



		<!-- footer start -->
		<footer>
			<div class="container">
				<div class="col-md-3 col-sm-6">
					<h4>Featured Job</h4>
					<ul>
						<li><a href="#">Browse Jobs</a></li>
						<li><a href="#">Premium MBA Jobs</a></li>
						<li><a href="#">Access Database</a></li>
						<li><a href="#">Manage Responses</a></li>
						<li><a href="#">Report a Problem</a></li>
						<li><a href="#">Mobile Site</a></li>
						<li><a href="#">Jobs by Skill</a></li>
					</ul>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<h4>Latest Job</h4>
					<ul>
						<li><a href="#">Browse Jobs</a></li>
						<li><a href="#">Premium MBA Jobs</a></li>
						<li><a href="#">Access Database</a></li>
						<li><a href="#">Manage Responses</a></li>
						<li><a href="#">Report a Problem</a></li>
						<li><a href="#">Mobile Site</a></li>
						<li><a href="#">Jobs by Skill</a></li>
					</ul>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<h4>Reach Us</h4>
					<address>
					<ul>
					<li>1201, Murakeu Market, QUCH07<br>
					United Kingdon</li>
					<li>Email: Support@job.com</li>
					<li>Call: 044 123 458 65879</li>
					<li>Skype: job@skype</li>
					<li>FAX: 123 456 85</li>
					</ul>
					</address>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<h4>Drop A Mail</h4>
					<form>
						<input type="text" class="form-control input-lg" placeholder="Your Name">
						<input type="text" class="form-control input-lg" placeholder="Email...">
						<textarea class="form-control" placeholder="Message"></textarea>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
				
				
			</div>
			<div class="copy-right">
			 <p>&copy;Copyright 2018 Jober Desk | Design By <a href="https://themezhub.com/">ThemezHub</a></p>
			</div>
		</footer>
		 
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="js/bootsnav.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>