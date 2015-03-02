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

	<?php echo $this->Html->css(array('VyeKMJZy2t1C3W9fHSxkAFSe2wsDeBuM6iDk0u45DK9','3E3if1lJqGdYVaUGj9QgGrQ5rxMSUJSSzkEJ6AQGmGZ')); ?>
	
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

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand ga-tracked" href="#" data-ga-category="menu-superior" data-ga-action="brand" data-ga-label="">
                <img src="img/logo_nav.png" />
            </a>
            <div class="nav-collapse collapse">
                
                    <ul class="nav">
    
        <li>
            <a class="ga-tracked" href="#" data-ga-category="menu-superior" data-ga-action="inicio" data-ga-label="">
                Início
            </a>
        </li>
    
        <li>
            <a class="ga-tracked" href="#" data-ga-category="menu-superior" data-ga-action="desafios" data-ga-label="">
                Conquistas
            </a>
        </li>
    
        <li>
            <a href="#" class="ga-tracked" data-ga-category="menu-superior" data-ga-action="alunos" data-ga-label="">
                Desafios
            </a>
        </li>
    
        <li>
            <a href="bitcoins" class="ga-tracked" data-ga-category="menu-superior" data-ga-action="turmas" data-ga-label="">
                Bitcoins
            </a>
        </li>
    
</ul>

                
                <ul class="nav pull-right">
                    
	<a href="#" class="ga-tracked" style="float: left;" data-ga-category="menu-superior" data-ga-action="perfil" data-ga-label="" style="float: left;">
		<li style="padding: 15px 15px 10px;">
			Perfil
		</li>
	</a>
	<a href="/edudream" class="ga-tracked" data-ga-category="login-logout" data-ga-action="logout" data-ga-label="" style="float: left;">
		<li style="padding: 15px 15px 10px;">
			Sair
		</li>
	</a>


                </ul>
            </div>
        </div>
    </div>
</div>

	
	<div id="page-wrapper">

		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>

	</div>
	<!-- /#page-wrapper -->


</div>
<!-- /#wrapper -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $this->params->webroot ?>js/lib/jquery.min.js"><\/script>')</script>
<?php echo $this->Html->script(array('lib/bootstrap.min', 'src/scripts.js')); ?>
<?php echo $this->CakeStrap->automaticScript(); ?>

</body>
</html>
