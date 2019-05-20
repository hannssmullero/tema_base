<?php 
$pensum = get_post(20);
$id_pensum = $pensum->ID;
$title_pensum = $pensum->post_title;
$content_pensum = $pensum->post_content;

$duracion = get_post_meta($pensum->ID, 'Duracion', true);
$fechadeinicio = get_post_meta($pensum->ID, 'Fecha de inicio', true);
$metodologia = get_post_meta($pensum->ID, 'Metodologia', true);
$precio = get_post_meta($pensum->ID, 'Precio', true);
?>
<div id="pensum">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-9">
				<div class="title-pensum"><?php echo $title_pensum ?></div>
				<div class="content-pensum"><?php echo $content_pensum ?></div>
			</div>
		</div>
	</div>

<div class="fondopensum">
	<div class="fondocolor">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9 col-lg-9">
					<div class="text-center texto-pensum">
					<p><b>Duración:</b> <?php echo $duracion ?></p>
					<p><b>Fecha de inicio: </b><?php echo $fechadeinicio ?></p>
					<p><b>Metodología: </b><?php echo $metodologia ?></p>
					<p><b>Precio: </b><?php echo $precio ?> <i style="color:#fff; font-size: 24px;" class="fa fa-eur" aria-hidden="true"></i></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-sm-3">
							<img style="display: block; margin:0 auto;" src="<?php echo IMAGES?>/titulo.png" class="img-responsive">
							<p class="texto-iconos">Título del Centro de Estudios Superiores OMMA</p>
						</div>
						<div class="col-sm-3">
							<img style="display: block; margin:0 auto;" src="<?php echo IMAGES?>/metodologia.png" class="img-responsive">
							<p class="texto-iconos">Metodología<br/> Online - Presencial</p>
						</div>
						<div class="col-sm-3">
							<img style="display: block; margin:0 auto;" src="<?php echo IMAGES?>/alumno.png" class="img-responsive">
							<p class="texto-iconos">Alumnado internacional</p>
						</div>
						<div class="col-sm-3">
							<img style="display: block; margin:0 auto;" src="<?php echo IMAGES?>/teacher.png" class="img-responsive">
							<p class="texto-iconos">Profesores de prestigio</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
</div>
</div>