<?php
/**
 * The Header for our theme.
 */
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap-theme.min.css">

	<link href='https://fonts.googleapis.com/css?family=Special+Elite|Courgette|Quintessential|Marcellus+SC|News+Cycle' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-67507216-1', 'auto');
	  ga('send', 'pageview');

	</script>
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

    <div class="bg-primary" style="height:20px"></div>
	<header class="container">

		<div class="pull-right">
			<a href="https://www.facebook.com/GreensprairiePTO">
				<img class="hidden-xs" src="<?php bloginfo('template_directory') ?>/img/FB-FindUsonFacebook-online-144.png" />
				<img class="visible-xs-block" src="<?php bloginfo('template_directory') ?>/img/FB-FindUsonFacebook-online-72.png" />
			</a>
		</div>
		<div class="site-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img class="visible-md-block visible-lg-block visible-sm-block" src="<?php bloginfo('template_directory') ?>/img/logo-large.png" />
				<img class="visible-xs-block" src="<?php bloginfo('template_directory') ?>/img/logo-stacked.png" />
			</a>
		</div>
		
		<div class="tagline h4 hidden-xs text-primary">Parents, Teachers, and Children&mdash;Working and Learning Together</div>
	</header>
	<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <!-- Hamburger menu, 3 bars stacked -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
		<?php wp_nav_menu( array( 
				'theme_location' => 'primary',
				'menu_class' => 'nav navbar-nav',
				'container' => FALSE
		) ); ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

