<!DOCTYPE html>
<html>
<head>
	  <!-- CSS -->
	  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"    rel="stylesheet" type='text/css'>
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gallery.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	  

	  <!-- JQUERY -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
  	  <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
  	  <script src="<?php echo get_template_directory_uri(); ?>/js/topbottom.js"></script>
		

	  <meta charset="UTF-8">	  
	  <meta name="description" content="Mantis Project, Desenvolvimento de sites, materiais digitais e gráficos.">
	  <meta name="keywords" content="design,fazer,site,mobile,cartao,visita,panfletos">
	  <meta name="author" content="Mantis Project">
	  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">


	  <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>


	  	  <!-- JQUERY typed -->
	  			<script src="<?php echo get_template_directory_uri(); ?>/js/typed.js"></script>
			    <script>
				    document.addEventListener('DOMContentLoaded', function(){

				        Typed.new("#typed", {
				            stringsElement: document.getElementById('typed-strings'),
				            typeSpeed: 100,
				            backDelay: 700,
				            loop: false,
				            contentType: 'html', // or text
				            // defaults to null for infinite loop
				            loopCount: null,
				            callback: function(){ foo(); },
				            resetCallback: function() { newTyped(); }
				        });

				        var resetElement = document.querySelector('.reset');
				        if(resetElement) {
				            resetElement.addEventListener('click', function() {
				                document.getElementById('typed')._typed.reset();
				            });
				        }

				    });

				    function newTyped(){ /* A new typed object */ }

				    function foo(){ console.log("Callback"); }

				</script>


	  <title>Mantis Project - Desenvolvimento e Design</title>
	

	<?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

</head>

<body>
	<header>
		<!-- Second navbar for profile settings -->
		    <nav class="navbar navbar-inverse">
		      <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4"> 
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand fadeInLeftBig animated wow" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon.png"></a>
		        </div>
		    
		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse fadeInRight animated wow" id="navbar-collapse-4">
		          <ul class="nav navbar-nav navbar-right">
		            <li><a href="#inicio">INICIO</a></li>
		            <li><a href="#servicos">SERVIÇOS</a></li>
		            <li><a href="#portfolio">PORTFÓLIO</a></li>
		            <li><a href="#contato">CONTATO</a></li>
		            <li>
		            	<div class="dropdown">
						  <a class="" data-toggle="dropdown">IDIOMA
						  <span class="caret"></span></a>
						  <ul class="dropdown-menu">
						    <li><a class="dropdown-item active" href="/">Português</a></li>
						    <li><a class="dropdown-item" href="/en">Inglês</a></li>
						    <li><a class="dropdown-item" href="/ja">Japonês</a></li>
						  </ul>
						</div>
		            </li>

		          </ul>
		        </div><!-- /.navbar-collapse -->
		      </div><!-- /.container -->
		    </nav><!-- /.navbar -->
		</div><!-- /.container-fluid -->
	</header>