<!DOCTYPE html>
<html lang="en" style="margin-top:0!important;">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<?php wp_head(); ?>
</head>
<body>
<div class="agl agl-fadeCSSLeft">
<header class="bg-yellow pt-100 pb-100">
	<div class="container">
		<nav class="row">
			<div class="col-12">
				<img src="<?php echo get_template_directory_uri();?>/img/logo-javier.png" alt="" style="max-width:200px;">
			</div>
			<ul class="main-nav m-auto">
				<li><a href="<?php echo get_home_url(); ?>/pagina-ejemplo" class="current">pagina ejemplo</a></li>
				<li><a href="<?php echo get_home_url(); ?>/politica-privacidad">politica-privacidad</a></li>
			</ul>
		</nav>
	</div>
</header>
