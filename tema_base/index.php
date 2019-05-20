<?php get_header(); ?>

<div class="container-fluid internas">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="titulo-interna"><h1><?php the_title(); ?></h1></div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="interna">	
					 <hr class="">
						  <div class="entry">
						    <?php the_content(); ?>				    
						  </div>
					 <?php endwhile; else: ?>
					 <p>No hay contenido.</p>
					 <?php endif; ?>				
				</div>
			</div>
		</div>
</div>

<?php get_footer(); ?>