<?php get_header();?>
<?php $loop = new WP_Query( array( 'post_type' => 'dados', 'p' => 5 ) ); ?>
<?php while ( $loop->have_posts() ){ $loop->the_post(); ?>
<div data-aos="fade-down" data-aos-duration="300" class="heade-page container-fluid bg-cover bg-fixed" style="background-image: url('<?php the_field('imagem_destaque'); ?>');">
	<div class="logoIndex">
		<h1 data-aos="fade-down" data-aos-duration="500"><?php the_title(); ?></h1>
		<div data-aos="fade-down" data-aos-duration="600" class="barra"></div>
	</div>
</div>
<div class="container mb-5" id="contato">
	<div class="titulo"><?php echo $_GET['tituloK']?></div>
	<h4 class="mt-5 mb-5 text-center" style="width: 100%; max-width: 700px; margin: auto;"><?php echo $_GET['mensagemok']?></h4>
	<div class="btnPadrao"><a href="<?php echo $_GET['linkok']?>">Voltar</a></div>
</div>

<?php } get_footer();?>