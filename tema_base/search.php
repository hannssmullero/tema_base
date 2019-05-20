<?php 

get_header(); 

	/* Search Count */ 
	$allsearch = new WP_Query("s=$s&posts_per_page=-1"); 
	$key = esc_html($s, 1); 
	$count = $allsearch->post_count;
		$title =  $count . ' '. 'resultados para la búsqueda ';          
		$title .= '<span class="search-terms"><em>'; 
		$title .= $key . '</em></span>';
	wp_reset_query(); 

?>

<div class="container">
	
	<!-- Title -->
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h1>
					<?php echo $title?>
				</h1>
			</div>
		</div>
	</div>

	<!-- Content -->
	<div class="row">
		
		<!-- Primary Loop -->
		<div class="col-sm-12">
			<?php if (have_posts()) : ?>
			       <?php while (have_posts()) : the_post(); ?>    
			       <article id="post-<?php the_ID(); ?>">
			       	<?php
			       	if( get_post_type() == 'paises_defamation' ) {
					    ?>
					    <h2>Map Defamation</h2>
					    <?php
					} else {
					    ?>
					    <h2>Map Incitement</h2>
					    <?php
					}
			       	?>
			       		<h3><?php the_title(); ?></h3>
						 
						<?php if ( has_post_thumbnail() ) { ?>
							<div class="alignleft"><?php the_post_thumbnail('medium', array('class' =>  'img-responsive' )); ?></div>										
						<?php  } ?>			       		
			       		
						<div class="excerpt">									          
					          <?php 
					            $excerpt = get_the_excerpt(); 
					            $keys= explode(" ",$s); 
					            $excerpt = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt" style="background:yellow">\0</strong>', $excerpt); 
					            echo $excerpt; 
					          ?>					          
						</div>
						<p>
							<a href="<?php the_permalink()?>" class="btn btn-primary">Read more</a>
						</p>
			       </article>
			       <hr>
			       <?php endwhile; ?>
			<?php endif; ?>
		</div>

		<!-- Sidebar -->
	</div>
</div>

<?php get_footer(); ?>	  