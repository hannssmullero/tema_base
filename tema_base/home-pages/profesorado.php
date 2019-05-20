<?php
 
$profesor = get_post(261);
$id_profesor = $profesor->ID;
$title_profesor = $profesor->post_title;
$content_profesor = $profesor->post_content;

$titulo_seccion_p = get_post_meta( $profesor->ID, 'Titulo seccion', true );
$titulo_video_p = get_post_meta( $profesor->ID, 'Titulo video', true );
$video_id_p = get_post_meta( $profesor->ID, 'video ID', true );
$imagen_p = get_post_meta( $profesor->ID, 'imagen', true );

?>
<div id="profesorado">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-9">
				<h1 class="title-profesor"><?php echo $title_profesor ?></h1>
				<div class="content-profesor"><?php echo $content_profesor ?></div>				
			</div>
		</div>
	</div>
	<div class="video-profesores">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-sm-5 col-sm-offset-1">
							<div class="texto-video-profesor">
							<h4><?php echo $titulo_seccion_p ?></h4>
							<h3><?php echo $titulo_video_p ?></h3>
							</div>
						</div>
						<div id="cambiar_clase2" class="col-sm-5">
							<div class="imagen-video">									
								<img src="<?php echo $imagen_p ?>" class="img-responsive">
								<div id="mostrar2" class="wow bounce">
								<div class="imgplay"></div>
								</div>
								<div id="video2">
									<iframe id="videoplay2" width="100%" height="360" src="https://www.youtube.com/embed/<?php echo $video_id_p ?>?rel=0" frameborder="0" allowfullscreen></iframe>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	<div class="visible-lg visible-md">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9 col-lg-9">
					<div class="row">
						<?php
							$args = array( 'post_type' => 'profesores', 'posts_per_page' => 3, 'order' => 'ASC', );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							$link = get_permalink();
							$imagenprofesor = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						
						?>
						<div class="col-sm-4">
							<div class="profesores">
								<div class="img-profesor wow fadeInDown" data-wow-duration="2s"><img src="<?php echo $imagenprofesor ?>" class="img-responsive img-circle box-shadow"></div>
								<div class="nombre-profesor wow fadeInUp" data-wow-duration="2s"><p><?php the_title() ?></p></div>
								<div class="clase-profesor wow fadeInLeft" data-wow-duration="2s"><p><?php the_excerpt() ?></p></div>
							</div>
						</div>
						<?php	 
							 			
						endwhile;
						?>
					</div>
					<div class="row">
						<?php
							$args = array( 'post_type' => 'conferenciantes', 'posts_per_page' => 3, 'order' => 'ASC', );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							$link = get_permalink();
							$imagenprofesor = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						
						?>
						<div class="col-sm-4">
							<div class="profesores">
								<div class="img-profesor wow fadeInDown" data-wow-duration="2s"><img src="<?php echo $imagenprofesor ?>" class="img-responsive img-circle box-shadow"></div>
								<div class="nombre-profesor wow fadeInUp" data-wow-duration="2s"><p><?php the_title() ?></p></div>
								<div class="clase-profesor wow fadeInLeft" data-wow-duration="2s"><p><?php the_excerpt() ?></p></div>
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
	<div class="visible-xs visible-sm">
		<div class="container">
			<div class="row">
				<?php
					$args = array( 'post_type' => 'profesores', 'posts_per_page' => 1, 'order' => 'ASC', );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					$link = get_permalink();
					$imagenprofesor = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				
				?>
				<div class="col-sm-12">
					<div class="profesores">
						<div class="img-profesor wow fadeInDown" data-wow-duration="2s"><img src="<?php echo $imagenprofesor ?>" class="img-responsive img-circle"></div>
						<div class="nombre-profesor wow fadeInUp" data-wow-duration="2s"><p><?php the_title() ?></p></div>
						<div class="clase-profesor wow fadeInLeft" data-wow-duration="2s"><p><?php the_excerpt() ?></p></div>
					</div>
				</div>	
				<?php	 
				 			
				endwhile;
				?>		
			</div>
			<div class="row">
				<?php
					$args = array( 'post_type' => 'conferenciantes', 'posts_per_page' => 1, 'order' => 'ASC', );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					$link = get_permalink();
					$imagenprofesor = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				
				?>
				<div class="col-sm-12">
					<div class="profesores">
						<div class="img-profesor wow fadeInDown" data-wow-duration="2s"><img src="<?php echo $imagenprofesor ?>" class="img-responsive img-circle"></div>
						<div class="nombre-profesor wow fadeInUp" data-wow-duration="2s"><p><?php the_title() ?></p></div>
						<div class="clase-profesor wow fadeInLeft" data-wow-duration="2s"><p><?php the_excerpt() ?></p></div>
					</div>				
				</div>
				<?php	 
				 			
				endwhile;
				?>
			</div>
		</div>
	</div>
</div>