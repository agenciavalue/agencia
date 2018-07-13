<?php get_header();?>
<?php $loop = new WP_Query( array( 'post_type' => 'dados', 'p' => 15 ) ); ?>
<?php while ( $loop->have_posts() ){ $loop->the_post(); ?>
<div data-aos="fade-down" data-aos-duration="300" class="heade-page container-fluid bg-cover bg-fixed" style="background-image: url('<?php the_field('imagem_destaque'); ?>');">
	<div class="logoIndex">
		<h1 data-aos="fade-down" data-aos-duration="500"><?php the_title(); ?></h1>
		<div data-aos="fade-down" data-aos-duration="600" class="barra"></div>
	</div>
</div>
<div class="container">
	<div class="page">
		<div class="row">
			<div class="col-md-12">
				<div class="titulo_page">
					<h1 class="h5"><?php the_title(); ?></h1>
					<div class="barra"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php } get_footer();?>