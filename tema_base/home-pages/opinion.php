<?php
$opinion = get_post(259);
$id_opinion = $opinion->ID;
$title_opinion = $opinion->post_title;
$content_opinion = $opinion->post_content;
?>
<div id="opinion">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<h1 class="title-opinion"><?php echo $title_opinion ?></h1>
				<div class="content-opinion"><?php echo $content_opinion ?></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-9">
				<div class="row">
					<?php
						$args = array( 'post_type' => 'opinion', 'posts_per_page' => 2, 'order' => 'ASC', );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						$link = get_permalink();
						$urlopinion = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					
					?>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="wow fadeInLeft imagen-opinion">
								<img src="<?php echo $urlopinion ?>" class="img-responsive img-circle box-shadow">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12">
										<div class="titulo-alumno wow fadeInRight"><?php the_title() ?></div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="extracto-alumno wow fadeInRight"><?php the_excerpt() ?></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-lg-3 col-md-3">
								<div class="wow fadeInUp comillas"><img src="<?php echo IMAGES?>/comillas.png" class="img-responsive"></div>
							</div>
							<div class="col-sm-12 col-md-9 col-lg-9">
								<div class="contenido-alumno wow fadeInUp"><?php the_content() ?></div>
							</div>
						</div>
					</div>
					<?php	 	
					endwhile;
					?>
				</div>
			</div>
		</div>
	</div>
</div>
