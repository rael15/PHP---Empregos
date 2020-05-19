<?php 
	session_start();
	
?>

<!doctype html>
<html class="no-js" lang="en">
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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Empresas</a>
								<ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
									<li class="active"><a href="cadastro.php">Cadastro</a></li>
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
				<h2>Encontre seu emprego!</h2>
				<p>Consiga ou mude de emprego em 2020</p>
			</div>
		</div>
	</section>
	
	<section class="jobs"  style="background-color: #f5f5f5">
		<div class="container">
			<div class="">
				<h2>Cadastrar vagas</h2>
				
			</div>
			<!-- novo -->
			<div class="hero-wrap hero-wrap-2">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-1 mt-5">
              
              <p>
                <?php 
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
  
      <div class="ftco-section bg-light" >
        <div class="container">
          <div class="row">
         
            <div class="col-md-12 col-lg-8 mb-5" style="background-color: #fff">
            
                   <form action="core/script.php" method="POST" class="p-5 bg-white">
                
                <!-- <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="option-price-1">
                      <input type="checkbox" id="option-price-1"> <span class="text-success">$500</span> For 30 days
                    </label>
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="option-price-2">
                      <input type="checkbox" id="option-price-2"> <span class="text-success">$300</span> / Monthly Recurring
                    </label>
                  </div>
                </div> -->
  
                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Ex:. Professional UI/UX Designer">
                  </div>
                </div>
  
                <div class="row form-group mb-5">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="empresa">Empresa</label>
                    <input type="text" id="empresa" name="empresa" class="form-control" placeholder="eg. Facebook, Inc.">
                  </div>
                </div>
                <div class="row form-group mb-5">
                    <div class="col-md-12 mb-3 mb-md-0">
                    <label for="exampleFormControlFile1">Logomarca da empresa</label>
                    <input type="file" class="form-control-file" id="imagem" name="imagem">
                  </div>    
                </div>
                <div class="row form-group">
                  <div class="col-md-12 mt-3"><h5>Jornada</h5></div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <pack for="option-job-type-1">
                      <input type="radio" id="option-job-type-1" name="jornada" value="Expediente Normal"> Expediente normal
                    </label>
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="option-job-type-2">
                      <input type="radio" id="option-job-type-2" name="jornada" value="Meio Período"> Meio Período
                    </label>
                  </div>
  
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="option-job-type-3">
                      <input type="radio" id="option-job-type-3" name="jornada" value="Freelance"> Freelance
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="option-job-type-4">
                      <input type="radio" id="option-job-type-4" name="jornada" value="Estágio"> Estágio
                    </label>
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="option-job-type-4">
                      <input type="radio" id="option-job-type-4" name="jornada" value="Termporário"> Termporário
                    </label>
                  </div>
  
                </div>
  
                <div class="row form-group mb-4">
                  <div class="col-md-12"><label>Localização</label></div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <input type="text" class="form-control" name="localizacao" placeholder="Brasília, DF">
                  </div>
                </div>
  
                <div class="row form-group">
                  <div class="col-md-12"><label>Descrição</label></div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <textarea name="descricao" class="form-control" id="" cols="30" rows="5"></textarea>
                  </div>
                </div>

                <div class="row form-group mb-4">
                    <div class="col-md-12"><label>Email para enviar o currículo</label></div>
                    <div class="col-md-12 mb-3 mb-md-0">
                      <input type="text" class="form-control" name="email" placeholder="email@site.com.br">
                    </div>
                  </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Publicar" class="btn btn-primary  py-2 px-5">
                  </div>
                </div>
  
    
              </form>
            </div>	
			<!-- fim novo -->
			
			<!-- inicio lateral -->
			<div class="col-lg-4">
				<?php
					echo "Usuario: ". $_SESSION['usuarioNome'];	
				?>
				<div class="p-4 mb-3 bg-white">
					<h3 class="h5 text-black mb-3">Contact Info</h3>
					<p class="mb-0 font-weight-bold">Address</p>
					<p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

					<p class="mb-0 font-weight-bold">Phone</p>
					<p class="mb-4"><a href="#">+1 232 3235 324</a></p>

					<p class="mb-0 font-weight-bold">Email Address</p>
					<p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="671e081215020a060e0b2703080a060e094904080a">[email&#160;protected]</span></a></p>

					</div>
					
					<div class="p-4 mb-3 bg-white">
					<h3 class="h5 text-black mb-3">More Info</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
					<p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
					</div>
				</div>
        	</div>
			<!-- Fim lateral -->
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