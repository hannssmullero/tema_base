<?php
$contacto = get_post(266);
$id_contacto = $contacto->ID;
$title_contacto = $contacto->post_title;
$content_contacto = $contacto->post_content;


?>



<div id="contacto">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-9">
				<h1 class="title-contactanos"><?php echo $title_contacto ?></h1>
				<!--<p class="contenido-contactanos">Ponte en contacto con nosotros a través del formulario. <br/>También puedes encontrarnos en:</p> 
				<p class="telefono">Calle Ángel, 2<br/>
					28005   Madrid</p>
			</div>-->
			<div><?php echo $content_contacto ?></div>
		</div>
		<!--<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-9">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-1">
						<div class="visible-md visible-lg">
 							<!--<img style="margin: 0 140px;" src="<?php echo IMAGES?>/telephone.png" class="wow shake img-responsive">-->
 						<!--</div> 				
					</div>
					<div class="col-sm-4">
						<p class="telefono">
						+34 91 172 23 94 <br/><a href="mailto:admisiones@ommayau.com">admisiones@ommayau.com</a>
						</p>
					</div>
				</div>
			</div>-->
		</div>
	</div>
	<div class="visible-xs visible-sm">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="text-center">
						<a id="subir-movil" href="#informacion" class="btn btn-contactenos-movil">CONTÁCTANOS</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="height: 70px;"></div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6075.8678980442955!2d-3.711926!3d40.410314!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227d79f26cef9%3A0x5a8681a1036fc8bc!2sCalle+%C3%81ngel%2C+2%2C+28005+Madrid%2C+Spain!5e0!3m2!1sen!2sgt!4v1469658866154" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

