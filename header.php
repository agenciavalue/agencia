<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php $loop = new WP_Query( array( 'post_type' => 'dados', 'p' => 36 ) ); ?>
	<?php while ( $loop->have_posts() ){ $loop->the_post(); ?>
		<link rel="icon" sizes="192x192" href="<?php the_field('ícone') ?>">
		<!-- Dados -->
		<title><?php the_field('nome') ?></title>
		<meta name="description" content="<?php the_field('descricao') ?>" />
		<meta name="keywords" content="<?php the_field('palavras_chave') ?>" />
		<meta name="author" content="Agência VALUE - www.agenciavalue.com.br" />
		<meta name="robots" content="index, follow" />
		<meta property="og:title" content="<?php the_field('nome') ?>" />
		<meta property="og:url" content="<?php bloginfo('url') ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="<?php the_field('descricao') ?>" />
	<?php }?>

	<!-- Style & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/application.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container_fluid" id="corpo">
	<div class="row">
		<!-- Menu -->
		<div class="col-md-2" id="menu">
			<div class="menu">
				<a  data-aos="fade-up" data-aos-duration="500" data-aos-offset="00" href="<?php bloginfo('url') ?>/"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="Agência VALUE"></a>
				<ul>
					<li data-aos="fade-up" data-aos-duration="700" data-aos-offset="00"><a href="<?php bloginfo('url') ?>/sobre">SOBRE</a></li>
					<li data-aos="fade-up" data-aos-duration="800" data-aos-offset="00"><a href="<?php bloginfo('url') ?>">PROJETOS</a></li>
					<li data-aos="fade-up" data-aos-duration="900" data-aos-offset="00"><a href="<?php bloginfo('url') ?>/servicos">SERVIÇOS</a></li>
					<li data-aos="fade-up" data-aos-duration="1000" data-aos-offset="00"><a href="<?php bloginfo('url') ?>/contato">CONTATO</a></li>
				</ul>
			</div>
		</div>
		<!-- Conteúdo -->
		<div class="col-md-10" id="conteudo">