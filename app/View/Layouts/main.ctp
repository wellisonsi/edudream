<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $title_for_layout; ?> - <?php echo Configure::read('Application.name') ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=Lobster+Two:700,700italic' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>

	<?php echo $this->Html->css(array('5hX5kd0och1OrEEWj09u6wvKLLVCThZDCGAyp7ywXSg')); ?>
	
	<?php echo $this->CakeStrap->automaticCss(); ?>
	<?php echo $this->Html->script('lib/modernizr') ?>
</head>
<body class="<?php echo $this->params->params['controller'].'_'.$this->params->params['action']?>">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser
	today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better
	experience this site.</p>
<![endif]-->


<div id="wrapper">

	<nav id="nav-principal" class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">
						<img src="img/logo_nav.png" />
					</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#"
								class="ga-tracked"
								data-ga-category="webpage-menu-superior"
								data-ga-action="home"
								data-ga-label=""
								title="Ir ao início da página.">
								Início
							</a>
						</li>
						<li class="">
							<a href="#"
								class="ga-tracked"
								data-ga-category="webpage-menu-superior"
								data-ga-label=""
								title="Descubra o que é a plataforma QuoraCoin">
								O que é QuoraCoin?
							</a>
						</li>
						
					</ul>

					<ul class="nav navbar-nav navbar-right">
						
						<li>
							<a href="conquista"
								class="ga-tracked"
								data-ga-category="webpage-menu-superior"
								data-ga-action=""
								data-ga-label=""
								title="Entrar na plataforma.">
								Entrar
							</a>
						</li>
					</li>
					</ul>
				</div>
			</div>
		</nav>

	<div id="page-wrapper">

		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>

	</div>
	<!-- /#page-wrapper -->

	<section id="footer-section">
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<ul class="list-unstyled">
								<li>
									<strong>Site</strong>
									<hr>
								</li>
								<li>
									<a href="/"
										class="ga-tracked"
										data-ga-category="webpage-rodape"
										data-ga-action="home"
										data-ga-label=""
										title="Ir ao início da página.">
										Início
									</a>
								</li>
								<li>
									<a href="conquista"
										class="ga-tracked"
										data-ga-category="webpage-rodape"
										data-ga-action="experimentar"
										data-ga-label=""
										>
										Experimentar
									</a>
								</li>
								
								
								<li>
									<a href="#"
										class="ga-tracked"
										data-ga-category="webpage-rodape"
										data-ga-action="sobre"
										data-ga-label=""
										title="">
										Sobre
									</a>
								</li>
								
							</ul>
						</div>
						<div class="col-md-3 blog-posts">
							<ul class="list-unstyled">
								<li>
									<strong>Ajuda</strong>
									<hr>
								</li>
								<li>
									<a href="#"
										target="_blank"
										class="ga-tracked"
										data-ga-category="webpage-rodape"
										data-ga-action=""
										data-ga-label="">
										O que são bitcoins.
									</a>
								</li>

								<li>
									<a href="#"
										target="_blank"
										class="ga-tracked"
										data-ga-category="webpage-rodape"
										data-ga-action=""
										data-ga-label="">
										O que é uma plataforma gameficada.
									</a>
								</li>
								
								<li>
									<a href="#"
										target="_blank"
										class="ga-tracked"
										data-ga-category="webpage-rodape"
										data-ga-action=""
										data-ga-label="">
										Maneiras de engajar usuários.
									</a>
								</li>
								
							</ul>
						</div>
						<div class="col-md-3">
							<div class="fb-like-box" data-href="https://www.facebook.com/PlaydeaEducacao" data-width="270" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
						</div>
						<div class="col-md-4">
							<h4 style="color: white; margin-bottom: 20px;">
								<strong>Fale conosco</strong>
							</h4>
							<div class="footer-contact">
								<div class="info">
									(82) 9627-9810
								</div>
							</div>
							<div class="footer-contact" style="margin-top: 10px;">
								<div class="info">
									contato@quoracoin.com
								</div>
							</div>
							<div class="footer-contact">
								<br>
								Rua José Camelo de Freitas, 143
								<br>
								Maceió, Alagoas
								<br><br><br>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>

</div>
<!-- /#wrapper -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $this->params->webroot ?>js/lib/jquery.min.js"><\/script>')</script>
<?php echo $this->Html->script(array('lib/bootstrap.min', 'src/scripts.js')); ?>
<?php echo $this->CakeStrap->automaticScript(); ?>

</body>
</html>
