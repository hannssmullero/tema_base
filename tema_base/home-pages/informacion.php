<?php 
$informacion=get_post(16);
$id_informacion=$informacion->ID;
$title_informacion=$informacion->post_title;
$content_informacion=$informacion->post_content;

$titulo_seccion = get_post_meta( $informacion->ID, 'Titulo seccion', true );
$titulo_video = get_post_meta( $informacion->ID, 'Titulo video', true );
$video_id = get_post_meta( $informacion->ID, 'video ID', true );
$imagen = get_post_meta( $informacion->ID, 'imagen', true );

?>
<div id="informacion">
	<div class="visible-lg visible-md">
		<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-1">
					<h1 class="title-informacion"><?php echo $title_informacion; ?></h1>
					<div class="content-informacion">
						<?php echo $content_informacion; ?>
					</div>
				</div>
				<div class="col-sm-3">
					<div data-spy="affix" data-offset-top="700">	
					<div class="contactanos box-shadow">
						<h1 class="title-contactenos">FORMULARIO DE CONTACTO</h1>
						<p class="datos">PÍDENOS INFORMACIÓN</p>
						<?php echo do_shortcode( '[contact-form-7 id="83" title="Formulario de contacto 1"]' ); ?>
					</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<div class="video-informacion">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-md-9 col-lg-9">
						<div class="row">
							<div class="col-sm-5 col-sm-offset-1">
								<div class="texto-video">
								<h4><?php echo $titulo_seccion ?></h4>
								<h3><?php echo $titulo_video ?></h3>
								</div>
							</div>
							<div id="cambiar_clase" class="col-sm-5">
								<div class="imagen-video">									
									<img src="<?php echo $imagen ?>" class="img-responsive">
									<div id="mostrar" class="wow bounce">
									<div class="imgplay"></div>
									</div>
									<div id="video">
										<iframe id="videoplay" width="100%" height="360" src="https://www.youtube.com/embed/<?php echo $video_id ?>?rel=0" frameborder="0" allowfullscreen></iframe>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	<div class="visible-sm visible-xs">
		<div class="contactanos">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="">
							<h1 class="title-contactenos">FORMULARIO DE CONTACTO</h1>
							<p class="datos">PÍDENOS INFORMACIÓN</p>
							<?php echo do_shortcode( '[contact-form-7 id="83" title="Formulario de contacto 1"]' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="title-informacion"><?php echo $title_informacion; ?></h1>
					<div class="content-informacion">
						<?php echo $content_informacion; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class=" video-informacion">
					<p><?php echo $titulo_video ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div id="cambiar_clase">
						<div class="imagen-video">									
							<iframe id="videoplay" width="100%" height="360" src="https://www.youtube.com/embed/<?php echo $video_id ?>?rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
