<?php get_header();?>

<!--<meta http-equiv="refresh" content="3;url=http://valueinvestingyteoriadelciclo.ommayau.com/">--> 

<div id="menu-enviar">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div><img style="display: block; margin: 0 auto;" src="<?php echo IMAGES?>/logoomma.png" class="img-responsive"></div>
			</div>
			<div class="col-sm-10">
				<?php 
					//Arguments for primary menu
					$args = array(
						'theme_location'    =>  'main_menu',
						'container'         =>  'div',
						'container_class'   =>  'main-menu',
						'menu_class'        =>  'nav nav-pills',
						'menu_id'           =>  'nav-scroll',
						'walker' => new wp_bootstrap_navwalker()
					);
	
					//Show menu
					if(has_nav_menu( 'main_menu' )){					
							wp_nav_menu( $args ); 
					}			
				?>		
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div style="padding: 50px;" class="text-center ">
			<br/>
			<br/>
			
			</div>
			<div class="esperar text-center">
				<p>Su solicitud ha sido enviada con éxito</p>
			<!--<p>Espere un momento...<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></p>-->
			<a href="http://valueinvestingyteoriadelciclo.ommayau.com/" class="btn btn-formulario">Regresar</a>
			
			</div>
			<?php //echo $datos ?>
		</div>
	</div>
</div>
<div id="contacto">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="title-contactanos">Contacto</h1>
				<p class="contenido-contactanos">Ponte en contacto con nosotros a través del formulario. <br/>También puedes encontrarnos en:</p> 
				<p class="telefono">Calle Ángel, 2<br/>
					28005   Madrid</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-1">
						<div class="visible-md visible-lg">
 							<!--<img style="margin: 0 140px;" src="<?php echo IMAGES?>/telephone.png" class="wow shake img-responsive">-->
 						</div> 				
					</div>
					<div class="col-sm-4">
						<p class="telefono">
						+34 91 172 23 94 <br/><a href="mailto:admisiones@ommayau.com">admisiones@ommayau.com</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="height: 150px;"></div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6075.8678980442955!2d-3.711926!3d40.410314!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227d79f26cef9%3A0x5a8681a1036fc8bc!2sCalle+%C3%81ngel%2C+2%2C+28005+Madrid%2C+Spain!5e0!3m2!1sen!2sgt!4v1469658866154" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php

$pixel = '';


if(isset($_GET['wpcf7_referer'])){
	
	 $args = array(
		'posts_per_page' => 1,
		'order' => 'ASC',
		'post_status' => 'private',
		'post_type' => 'contacto',
		'meta_query'  => array(
			array(
				'key' => 'contact_form_title',
				'value' => 'Formulario de contacto 1'
			),
			array(
				'key' => 'wpcf7_uniqid',
				'value' => $_GET['wpcf7_referer']
			)
		)
	);
	$posts = get_posts($args);
	
	//print_r($posts);
	
	if($posts){
		foreach($posts as $post){
			$submission =  get_post($post->ID);
			
			if(function_exists('get_pixel')){
			$pixel_params = array(
				'master' => 'value_investing',
				'email' => $submission->correo,
				'nombre' => $submission->nombre,
				'pais' => $submission->pais,
				'telefono' => $submission->telefono,
				'nota' => $submission->mensaje,
				'cp' => $submission->entero
			);
			if(isset($_SESSION['referer'])){
				$pixel_params['referer'] = $_SESSION['referer'];
			}
			$pixel = get_pixel($pixel_params);
			
			}
			
			
		}
		
	}
	
}else{
	
	$nombre			= 	isset($_POST['nombre']) ? $_POST['nombre'] : '';
	$apellido		= 	isset($_POST['apellido']) ? $_POST['apellido'] : '';
	$dni			= 	isset($_POST['dni']) ? $_POST['dni'] : '';
	$nacionalidad	= 	isset($_POST['nacionalidad']) ? $_POST['nacionalidad'] : '';
	$pais			= 	isset($_POST['pais']) ? $_POST['pais'] : '';
	$ciudad			= 	isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
	$direccion		= 	isset($_POST['direccion']) ? $_POST['direccion'] : '';
	$codigo			= 	isset($_POST['codigo']) ? $_POST['codigo'] : '';
	$telefono		= 	isset($_POST['telefono']) ? $_POST['telefono'] : '';
	$correo			= 	isset($_POST['correo']) ? $_POST['correo'] : '';
	$fechanac		= 	isset($_POST['fechanac']) ? $_POST['fechanac'] : '';
	$master			= 	isset($_POST['master']) ? $_POST['master'] : '';
	$como			= 	isset($_POST['como']) ? $_POST['como'] : '';
	$aceptas		= 	isset($_POST['aceptas']) ? $_POST['aceptas'] : '';
	
	$token	= 	isset($_POST['token']) ? $_POST['token'] : '';

	if ($correo and filter_var($correo, FILTER_VALIDATE_EMAIL) and $token == 'ea847988ba59727dbf4e34ee75726dc3') {
		
		$src_cv = '';
		$src_foto = '';	
		$src_fotocopia = '';	
		
		if($_FILES['cv']){			
				
			$file = $_FILES['cv'];
			$tamano = $file['size'];
			$tipo = $file['type'];
			
			if(in_array($tipo, array('application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf','image/gif', 'image/jpeg', 'image/pjpeg', 'image/png'))){
				if($tamano <= 20971520 ){			
					
					$archivo_id = hm_upload_file('cv');
					if($archivo_id){
						$src_cv = wp_get_attachment_url($archivo_id);	
					}
					  
				}else{
					$src_cv = 'Error tamaño';
				}
				
			}else{
				$src_cv = 'Error tipo';
			}
		}

		if($_FILES['foto']){
			
					
			$file2 = $_FILES['foto'];
			$tamano2 = $file['size'];
			$tipo2 = $file['type'];
			
			if(in_array($tipo2, array('application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf','image/gif', 'image/jpeg', 'image/pjpeg', 'image/png'))){
				if($tamano2 <= 20971520 ){			
					
					$archivo_id2 = hm_upload_file('foto');
					if($archivo_id2){
						$src_foto = wp_get_attachment_url($archivo_id2);	
					}
					  
				}else{
					$src_foto = 'Error tamaño';
				}
				
			}else{
				$src_foto = 'Error tipo';
			}
		}

		if($_FILES['fotocopia']){
			
							
			$file3 = $_FILES['fotocopia'];
			$tamano3 = $file['size'];
			$tipo3 = $file['type'];
			
			if(in_array($tipo3, array('application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf','image/gif', 'image/jpeg', 'image/pjpeg', 'image/png'))){
				if($tamano3 <= 20971520 ){			
					
					$archivo_id3 = hm_upload_file('fotocopia');
					if($archivo_id3){
						$src_fotocopia = wp_get_attachment_url($archivo_id3);	
					}
					  
				}else{
					$src_fotocopia = 'Error tamaño';
				}
				
			}else{
				$src_fotocopia = 'Error tipo';
			}
		}
	
		global $wpdb;
		
		$wpdb->insert("wp_formulario_admision", array(
		   "nombre" => $nombre,
		   "apellido" => $apellido,
		   "dni" => $dni,
		   "nacionalidad" => $nacionalidad,
		   "pais" => $pais,
		   "ciudad" => $ciudad,
		   "direccion" => $direccion,
		   "codigo" => $codigo,
		   "telefono" => $telefono,
		   "correo" => $correo,
		   "fechanac" => $fechanac,
		   "master" => $master,
		   "como" => $como,
		   "src_cv" => $src_cv,
		   "src_foto" => $src_foto,
		   "src_fotocopia" => $src_fotocopia,
		   
		));
		
		$to = 'admisiones@ommayau.com';
		$headers[] = 'Content-Type: text/html; charset=UTF-8';
		$headers[] = 'From: OMMA Admisiones <admisiones@ommayau.com>';
		$headers[] = 'Bcc: casilva@ufm.edu,gmelian@ommayau.com,hannssmuller@ufm.edu,ladelcid@ufm.edu,estebandiaz@ufm.edu';
		// para pruebas $headers[] = 'Bcc: hannssmuller@ufm.edu,estebandiaz@ufm.edu';
		$subject = 'Solicitud de admisión , Máster en Value Investing y Teoría del Ciclo';
		
		$body = "<table width='100%'>
				<tbody>
					<tr>
					<th style='border:#ccc 1px solid;background:#f2f2f2;padding:7px 10px;text-align:center' colspan='2'>Solicitud de admisión en línea</th>
					</tr>
					<tr>
					<td>Nombre</td>
					<td>$nombre</td>
					</tr>
					<tr>
					<td>Apellido</td>
					<td>$apellido</td>
					</tr>
					<tr>
					<td>DNI pasaporte - documento de identidad</td>
					<td>$dni</td>
					</tr>
					<tr>
					<td>Nacionalidad</td>
					<td>$nacionalidad</td>
					</tr>
					<tr>
					<td>País de residencia</td>
					<td>$pais</td>
					</tr>
					<tr>
					<td>Ciudad de residencia</td>
					<td>$ciudad</td>
					</tr>
					<tr>
					<td>Dirección</td>
					<td>$direccion</td>
					</tr>
					<tr>
					<td>Código posta</td>
					<td>$codigo</td>
					</tr>
					<tr>
					<td>Teléfono de contacto (código de área + número)</td>
					<td>$telefono</td>
					</tr>
					<tr>
					<td>Correo electrónico</td>
					<td>$correo</td>
					</tr>
					<tr>
					<td>Fecha de nacimiento</td>
					<td>$fechanac</td>
					</tr>
					<tr>
					<td>Máster al que desea aplicar</td>
					<td>$master</td>
					</tr>
					<tr>
					<td>¿Cómo se han enterado de la existencia del máster?</td>
					<td>$como</td>
					</tr>
					<tr>
					<td>Currículum Vitae</td>
					<td><a href=".$src_cv.">Descargar</a></td>
					</tr>
					<tr>
					<td>Fotografía</td>
					<td><a href=".$src_foto.">Descargar</a></td>
					</tr>
					<tr>
					<td>Fotocopia DNI</td>
					<td><a href=".$src_fotocopia.">Descargar</a></td>
					</tr>
				</tbody>
				</table>";
		 
		wp_mail( $to, $subject, $body, $headers );
		
		if(function_exists('get_pixel')){
			$pixel_params = array(
				'master' => 'value_investing',
				'email' => $correo,
				'nombre' => $nombre,
				'pais' => $pais,
				'telefono' => $telefono,
				'nota' => $estudiar,
				'cp' => $como
			);
			if(isset($_SESSION['referer'])){
				$pixel_params['referer'] = $_SESSION['referer'];
			}
			$pixel = get_pixel($pixel_params);
			
			}
	} else {
		echo 'Error.';
	}

}

if($pixel){
	
	echo $pixel;	
}

?>
<?php get_footer(); ?>