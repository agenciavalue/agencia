<?php get_header();?>
<?php if(have_posts()){ while(have_posts()){ the_post();?>
<div data-aos="fade-down" data-aos-duration="300" class="bg-cover bg-fixed" style="background-image: url('<?php the_field('imagem_destaque'); ?>');">
	<div class="heade-page container-fluid" style="background: rgba(0,0,0,0.5);">
		<div class="logoIndex">
			<h1 data-aos="fade-down" data-aos-duration="500"><?php the_title(); ?></h1>
			<div data-aos="fade-down" data-aos-duration="600" class="barra"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="page">
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php } } get_footer();?>
