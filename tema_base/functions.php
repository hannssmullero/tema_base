<?php

//Customs Types
//require_once('includes/custom-post-types.php');

// Register MetaBoxes
require_once('includes/metas.php');

require_once('includes/wp_bootstrap_navwalker.php');

if(!is_admin()){
	require_once(ABSPATH . 'wp-admin/includes/image.php');
	require_once(ABSPATH . 'wp-admin/includes/file.php');
	require_once(ABSPATH . 'wp-admin/includes/media.php');
}

//Define constants
define('HOMELINK', site_url('/'));
define('PATH', get_template_directory_uri());
define('IMAGES', get_template_directory_uri()."/img" );
define('SITENAME', get_bloginfo('name') );
define('HOMECAT', get_cat_ID('home'));
define('BLOGCAT', get_cat_ID('blog'));


//Register menus
register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'secondary_menu' => 'Secondary Menu'
) );

//Post Thumbnails
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
} 


function hm_como($atts, $content = null){
	$html ='<select class="form-control pais" name="entero" required="required">';
    		$html .='<option value="" selected="selected">¿Cómo conociste el Máster? *</option>';
    		$html .='<optgroup label="Buscadores">';
    			$html .='<option value="Google">Google</option>';
    			$html .='<option value="Otro">Otro</option>';
    		$html .='</optgroup>';
    		$html .='<optgroup label="MEDIOS DE COMUNICACIÓN">';
    			$html .='<option value="Expansión">Expansión</option>';
    			$html .='<option value="Libertad Digital">Libertad Digital</option>';
    			$html .='<option value="El Mundo">El Mundo</option>';
    			$html .='<option value="El Confidencial">El Confidencial</option>';
    			$html .='<option value="El Economista">El Economista</option>';
    			$html .='<option value="Otros">Otros</option>';
    		$html .='</optgroup>';
    		$html .='<optgroup label="REDES">';
    			$html .='<option value="Facebook">Facebook</option>';
    			$html .='<option value="Twitter">Twitter</option>';
    			$html .='<option value="Linkedin">Linkedin</option>';
    			$html .='<option value="Otros">Otros</option>';
    		$html .='</optgroup>';
    		$html .='<optgroup label="PORTALES EDUCATIVOS">';
    			$html .='<option value="Aprendemás">Aprendemás</option>';
    			$html .='<option value="Bolsamanía">Bolsamanía</option>';
    			$html .='<option value="CanalCurso">CanalCurso</option>';
    			$html .='<option value="Educaweb">Educaweb</option>';
 				$html .='<option value="Formazion">Formazion</option>';
    			$html .='<option value="Lectiva">Lectiva</option>';
    			$html .='<option value="MasterMania">MasterMania</option>';
    			$html .='<option value="Mastermas">Mastermas</option>';
    			$html .='<option value="TopFormación">TopFormación</option>';
    			$html .='<option value="TuMaster">TuMaster</option>';
    			$html .='<option value="Universia">Universia</option>';
    			$html .='<option value="Otro">Otro</option>';
    		$html .='</optgroup>';
    		$html .='<optgroup label="OTROS">';
    			$html .='<option value="Amigo">Amigo</option>';
    			$html .='<option value="Profesores">Profesores</option>';
    			$html .='<option value="Otros">Otros</option>';
    		$html .='</optgroup>';
    	$html .='</select>';
	
	return $html;
}
add_shortcode('como', 'hm_como');


function hm_pais($atts, $content = null){
	$html_pais ='<select class="form-control pais" name="pais" required="required"><option value="" selected="selected">País *</option><option value="AF">Afganistán</option><option value="AX">Åland</option><option value="AL">Albania</option><option value="DE">Alemania</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguila</option><option value="AQ">Antártida</option><option value="AG">Antigua y Barbuda</option><option value="AN">Antillas Neerlandesas</option><option value="SA">Arabia Saudita</option><option value="DZ">Argelia</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaiyán</option><option value="BS">Bahamas</option><option value="BH">Bahréin</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Bielorrusia</option><option value="BE">Bélgica</option><option value="BZ">Belice</option><option value="BJ">Benín</option><option value="BM">Bermudas</option><option value="BT">Bután</option><option value="BO">Bolivia</option><option value="BA">Bosnia y Herzegovina</option><option value="BW">Botsuana</option><option value="BV">Isla Bouvet</option><option value="BR">Brasil</option><option value="BN">Brunéi</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CV">Cabo Verde</option><option value="KY">Islas Caimán</option><option value="KH">Camboya</option><option value="CM">Camerún</option><option value="CA">Canadá</option><option value="CF">República Centroafricana</option><option value="TD">Chad</option><option value="CZ">República Checa</option><option value="CL">Chile</option><option value="CN">China</option><option value="CY">Chipre</option><option value="CC">Islas Cocos</option><option value="CO">Colombia</option><option value="KM">Comoras</option><option value="CG">República del Congo</option><option value="CD">República Democrática del Congo</option><option value="CK">Islas Cook</option><option value="KP">Corea del Norte</option><option value="KR">Corea del Sur</option><option value="CI">Costa de Marfil</option><option value="CR">Costa Rica</option><option value="HR">Croacia</option><option value="CU">Cuba</option><option value="DK">Dinamarca</option><option value="DM">Dominica</option><option value="DO">República Dominicana</option><option value="EC">Ecuador</option><option value="EG">Egipto</option><option value="SV">El Salvador</option><option value="AE">Emiratos Árabes Unidos</option><option value="ER">Eritrea</option><option value="SK">Eslovaquia</option><option value="SI">Eslovenia</option><option value="ES">España</option><option value="US">Estados Unidos</option><option value="UM">Islas ultramarinas de Estados Unidos</option><option value="EE">Estonia</option><option value="ET">Etiopía</option><option value="FO">Islas Feroe</option><option value="PH">Filipinas</option><option value="FI">Finlandia</option><option value="FJ">Fiyi</option><option value="FR">Francia</option><option value="GA">Gabón</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Islas Georgias del Sur y Sandwich del Sur</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GD">Granada</option><option value="GR">Grecia</option><option value="GL">Groenlandia</option><option value="GP">Guadalupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GF">Guayana Francesa</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Ecuatorial</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haití</option><option value="HM">Islas Heard y McDonald</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungría</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Irán</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islandia</option><option value="IL">Israel</option><option value="IT">Italia</option><option value="JM">Jamaica</option><option value="JP">Japón</option><option value="JE">Jersey</option><option value="JO">Jordania</option><option value="KZ">Kazajistán</option><option value="KE">Kenia</option><option value="KG">Kirguistán</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesoto</option><option value="LV">Letonia</option><option value="LB">Líbano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Luxemburgo</option><option value="MO">Macao</option><option value="MK">ARY Macedonia</option><option value="MG">Madagascar</option><option value="MY">Malasia</option><option value="MW">Malawi</option><option value="MV">Maldivas</option><option value="ML">Malí</option><option value="MT">Malta</option><option value="FK">Islas Malvinas</option><option value="IM">Isla de Man</option><option value="MP">Islas Marianas del Norte</option><option value="MA">Marruecos</option><option value="MH">Islas Marshall</option><option value="MQ">Martinica</option><option value="MU">Mauricio</option><option value="MR">Mauritania</option><option value="YT">Mayotte</option><option value="MX">México</option><option value="FM">Micronesia</option><option value="MD">Moldavia</option><option value="MC">Mónaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambique</option><option value="MM">Birmania</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="CX">Isla de Navidad</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Níger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk</option><option value="NO">Noruega</option><option value="NC">Nueva Caledonia</option><option value="NZ">Nueva Zelanda</option><option value="OM">Omán</option><option value="NL">Países Bajos</option><option value="PK">Pakistán</option><option value="PW">Palaos</option><option value="PS">Territorios palestinos</option><option value="PA">Panamá</option><option value="PG">Papúa Nueva Guinea</option><option value="PY">Paraguay</option><option value="PE">Perú</option><option value="PN">Islas Pitcairn</option><option value="PF">Polinesia Francesa</option><option value="PL">Polonia</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="GB">Reino Unido</option><option value="RE">Reunión</option><option value="RW">Ruanda</option><option value="RO">Rumania</option><option value="RU">Rusia</option><option value="EH">Sahara Occidental</option><option value="SB">Islas Salomón</option><option value="WS">Samoa</option><option value="AS">Samoa Americana</option><option value="KN">San Cristóbal y Nieves</option><option value="SM">San Marino</option><option value="PM">San Pedro y Miquelón</option><option value="VC">San Vicente y las Granadinas</option><option value="SH">Santa Helena</option><option value="LC">Santa Lucía</option><option value="ST">Santo Tomé y Príncipe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leona</option><option value="SG">Singapur</option><option value="SY">Siria</option><option value="SO">Somalia</option><option value="LK">Sri Lanka</option><option value="SZ">Suazilandia</option><option value="ZA">Sudáfrica</option><option value="SD">Sudán</option><option value="SE">Suecia</option><option value="CH">Suiza</option><option value="SR">Surinam</option><option value="SJ">Svalbard y Jan Mayen</option><option value="TH">Tailandia</option><option value="TW">República de China</option><option value="TZ">Tanzania</option><option value="TJ">Tayikistán</option><option value="IO">Territorio Británico del Océano Índico</option><option value="TF">Territorios Australes Franceses</option><option value="TL">Timor Oriental</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad y Tobago</option><option value="TN">Túnez</option><option value="TC">Islas Turcas y Caicos</option><option value="TM">Turkmenistán</option><option value="TR">Turquía</option><option value="TV">Tuvalu</option><option value="UA">Ucrania</option><option value="UG">Uganda</option><option value="EU">Unión Europea</option><option value="SU">Unión Soviética</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistán</option><option value="VA">Ciudad del Vaticano</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Islas Vírgenes Británicas</option><option value="VI">Islas Vírgenes Estadounidenses</option><option value="WF">Wallis y Futuna</option><option value="YE">Yemen</option><option value="DJ">Yibuti</option><option value="ZM">Zambia</option><option value="ZW">Zimbabue</option><option value="CS">Serbia y Montenegro</option><option value="VU">Vanuatu</option></select>';
	return $html_pais;
}
add_shortcode('pais', 'hm_pais');

add_filter('wpcf7_form_elements', 'do_shortcode');

//Add styles and scripts
function fc_scripts() {
    //STYLES

    // Add Open Sans font, used in the main stylesheet.
    //$font_url = add_query_arg( 'family', urlencode( 'Open+Sans:400,700' ), "//fonts.googleapis.com/css" );

    wp_register_style( 'bootstrap', PATH.'/css/bootstrap.min.css',array(), null  );   
    wp_enqueue_style( 'bootstrap' );
	
	wp_register_style( 'fontawesome', PATH.'/css/font-awesome.css',array(), null  );   
    wp_enqueue_style( 'fontawesome' );
	
	wp_register_style( 'animate', PATH.'/css/animate.css',array(), null  );   
    wp_enqueue_style( 'animate' );
	
	wp_register_style( 'swiper', PATH.'/css/swiper.min.css',array(), null  );   
    wp_enqueue_style( 'swiper' );
	
	wp_register_style( 'lightbox', PATH.'/js/lightbox2-master/css/lightbox.css',array(), null  );   
    wp_enqueue_style( 'lightbox' );

    wp_register_style( 'styles', get_stylesheet_uri(),array(), null  );   
    wp_enqueue_style( 'styles' );    

    //JAVASCRIPT
    wp_register_script( 'jquery-version', 'http://code.jquery.com/jquery-1.11.1.min.js', array('jquery'),null,true);
    wp_enqueue_script('jquery-version');
	
    wp_register_script( 'modernizr', PATH.'/js/modernizr.js');
    wp_enqueue_script('modernizr');

    wp_register_script( 'bootstrap', PATH.'/js/bootstrap.min.js', array('jquery'),null,true);
    wp_enqueue_script('bootstrap');
	
	wp_register_script( 'lightbox-js', PATH.'/js/lightbox2-master/js/lightbox.js', array('jquery'),null,true);
    wp_enqueue_script('lightbox-js');

    wp_register_script( 'app', PATH.'/js/app.js', array('jquery'),null,true);
    wp_enqueue_script('app');
	
	wp_register_script( 'scroll-to', PATH.'/js/scrollto/lib/jquery-scrollto.js', array('jquery'),null,true);
    wp_enqueue_script('scroll-to');
	
	wp_register_script( 'scripts', PATH.'/js/scripts.js', array('jquery'),null,true);
    wp_enqueue_script('scripts');
	
	wp_register_script( 'swiper-js', PATH.'/js/swiper.jquery.min.js', array('jquery'),null,true);
    wp_enqueue_script('swiper-js');
	
	wp_register_script( 'sudoslider', PATH.'/js/jquery.sudoSlider.min.js', array('jquery'),null,true);
    wp_enqueue_script('sudoslider');
	
	wp_register_script( 'properload', PATH.'/js/jquery.properload.js', array('jquery'),null,true);
    wp_enqueue_script('properload');
	
	
}
add_action( 'wp_enqueue_scripts', 'fc_scripts',1 );



// Add Opengraph metadata
function hm_add_opengraph_metas() {   
    global $post;
    setup_postdata( $post );
    $output =  "\n".'<!-- OPENGRAPH -->'. "\n";

    if ( is_singular() ) {                     
        $output .= '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '" />' . "\n";
        $output .= '<meta property="og:type" content="article" />' . "\n";
        $output .= '<meta property="og:url" content="' . get_permalink() . '" />' . "\n";
        $output .= '<meta property="og:description" content="' . esc_attr( get_the_excerpt() ) . '" />' . "\n";
        if ( has_post_thumbnail() ) {
            $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
            $output .= '<meta property="og:image" content="' . $imgsrc[0] . '" />' . "\n\n";
        }else{
            $output .= '<meta property="og:image" content="' . IMAGES . '/shareimg.jpg" />' . "\n\n";
        }
    }else{                
        $output .= '<meta property="og:title" content="' . SITENAME . '" />' . "\n";
        $output .= '<meta property="og:type" content="website" />' . "\n";
        $output .= '<meta property="og:url" content="' . HOMELINK . '" />' . "\n";
        $output .= '<meta property="og:description" content="' . get_bloginfo('description') . '" />' . "\n";
        $output .= '<meta property="og:image" content="' . IMAGES . '/shareimg.jpg" />' . "\n\n";
    }
    echo $output;
}
add_action( 'wp_head', 'hm_add_opengraph_metas' );



add_action('init', 'myStartSession', 1);

function myStartSession() {
    if(!session_id()) {
    	
        session_start();
		
		if(isset($_GET['referer'])){
	 		$_SESSION['referer'] = $_GET['referer'];
	 	} elseif(isset($_GET['Referer'])){
	 		$_SESSION['referer'] = $_GET['Referer'];
	 	}
    }
}

function hm_upload_file($file_id = '', $post_id = null){
$return = 0;
$post = get_post($post_id);
if($post){
	$attachment_id = media_handle_upload($file_id, $post->ID);
	if(!is_wp_error($attachment_id)){
		$return = $attachment_id;
	}
}
return $return;
			
}


	function get_pixel($args){
		
	 // --------------------------------------------------

		$codes = array(
			'banca' => array(
				'id_campana' => 322,
				'id_curso' => 8059,
				'id_soporte' => 274,
				'soporte_google' => 49,
				'soporte_facebook' => 50,
				'soporte_remarketing' => 278
			),
			'value_investing' => array(
				'id_campana' => 322,
				'id_curso' => 8060,
				'id_soporte' => 274,
				'soporte_google' => 49,
				'soporte_facebook' => 50,
				'soporte_remarketing' => 278,
				'soporte_libertad' => 316,
				'soporte_linkedin' => 687,
				'soporte_twitter' => 688
			),
			'economia_omma' => array(
				'id_campana' => 322,
				'id_curso' => 9225,
				'id_soporte' => 274,
				'soporte_google' => 321,
				'soporte_facebook' => 319,
				'soporte_remarketing' => 278,
				'soporte_libertad' => 316,
				'soporte_recupon' => 320,
				'soporte_linkedin' => 687,
				'soporte_twitter' => 688
			),
			'economia_ufm' => array(
				'id_campana' => 322,
				'id_curso' => 9225,
				'id_soporte' => 313,
				'soporte_google' => 315,
				'soporte_facebook' => 314,
				'soporte_remarketing' => 317
			),
			'ciudades_omma' => array(
				'id_campana' => 322,
				'id_curso' => 10246,
				'id_soporte' => 274,
				'soporte_google' => 321,
				'soporte_facebook' => 319
			),
			'ciudades_ufm' => array(
				'id_campana' => 322,
				'id_curso' => 10246,
				'id_soporte' => 313,
				'soporte_google' => 315,
				'soporte_facebook' => 314
			),
			'economia_omma_pt' => array(
				'id_campana' => 322,
				'id_curso' => 11085,
				'id_soporte' => 274,
				'soporte_google' => 321,
				'soporte_facebook' => 319,
				'soporte_remarketing' => 278,
				'soporte_libertad' => 316,
				'soporte_recupon' => 320
			),
		);
		
	 // --------------------------------------------------
		
		$pixel = '';

	 // --------------------------------------------------
		
		if($args['master'] != ''){
			$args['id_campana'] = $codes[$args['master']]['id_campana'];
			$args['id_curso'] = $codes[$args['master']]['id_curso'];
			$args['id_soporte'] = $codes[$args['master']]['id_soporte'];
			if($args['referer'] != ''){
				switch($args['referer']){
					case 'Google':
					case 'Adwords':
					case 'google':
					case 'adwords':
						$args['referer'] = 'soporte_google';
						break;
					case 'Facebook':
					case 'facebook':
						$args['referer'] = 'soporte_facebook';
						break;
					case 'AWRemarketing':
					case 'awremarketing':
						$args['referer'] = 'soporte_remarketing';
						break;	
					case 'Activolead':
					case 'activolead':
						$args['referer'] = 'soporte_activolead';
						break;	
					case 'Libertaddigital':
					case 'libertaddigital':
					case 'Libertad Digital':
					case 'Libertad digital':
					case 'libertad digital':
						$args['referer'] = 'soporte_libertad';
						break;
					case 'LinkedIn':
					case 'linkedin':
					case 'Linkedin':
						$args['referer'] = 'soporte_linkedin';
						break;
					case 'Twitter':
					case 'twitter':
						$args['referer'] = 'soporte_twitter';
						break;
					case 'Recupón':
					case 'Recupon':
					case 'recupón':
					case 'recupon':
						$args['referer'] = 'soporte_recupon';
						break;
					default:
						$args['referer'] = '';
				}
				if($args['referer'] != ''){
					$args['id_soporte'] = $codes[$args['master']][$args['referer']];
				}
			}
			if($args['id_soporte'] != '' && $args['id_curso'] != '' && $args['id_campana'] != ''){
				$pixel = '<img src="http://www.activolead.com/tracking.php?idsoporte=' . $args['id_soporte'] . '&amp;idcurso=' . $args['id_curso'] . '&amp;idcampana=' . $args['id_campana'] . '&amp;email=' . $args['email'] . '&amp;nombre=' . $args['nombre'] . '&amp;idpais=' . $args['pais'] . '&amp;idprovincia=&amp;apellidos=&amp;telefono=' . $args['telefono'] . '&amp;fechanacimiento=&amp;sexo=&amp;localidad=&amp;direccion=&amp;cp=' . $args['cp'] . '&amp;numero=&amp;dni=&amp;movil=&amp;telefono2=&amp;nestudios=&amp;situacion=&amp;empresa=&amp;nota=' . $args['nota'] . '&amp;horario_llamada=" width="1" height="1" border="0">';
			}
		}
		
	 // --------------------------------------------------
		
		return $pixel;
		
	 // --------------------------------------------------
		
	}

	add_action('init', 'vi_register_post_type');
	function vi_register_post_type(){
		register_post_type('contacto', array(
			'label' => 'Formularios de contacto enviados',
			'show_in_admin_bar' => false,
			'show_in_menu' => 'wpcf7',
			'show_ui' => true,
			'supports' => array('title', 'custom-fields')
		));
	}
	add_filter('wpcf7_form_hidden_fields', 'vi_wpcf7_form_hidden_fields');
	function vi_wpcf7_form_hidden_fields($hidden_fields){
		$hidden_fields['_wpcf7_uniqid'] = uniqid();
		return $hidden_fields;
	}
	add_action('wpcf7_mail_failed', 'vi_wpcf7_mail');
	add_action('wpcf7_mail_sent', 'vi_wpcf7_mail');
	function vi_wpcf7_mail($contact_form){
		$data = array();
		$data['contact_form']['name'] = $contact_form->name();
		$data['contact_form']['title'] = $contact_form->title();
		$submission = WPCF7_Submission::get_instance();
		if($submission){
			$data['submission']['remote_ip'] = $submission->get_meta('remote_ip');
			$data['submission']['response'] = $submission->get_response();
			$data['submission']['status'] = $submission->get_status();
			$data['submission']['timestamp'] = $submission->get_meta('timestamp');
			$data['submission']['url'] = $submission->get_meta('url');
			$data['submission']['user_agent'] = $submission->get_meta('user_agent');
			$posted_data = $submission->get_posted_data();
			if($posted_data){
				foreach($posted_data as $key => $value){
					if(substr($key, 0, strlen('_wpcf7')) == '_wpcf7'){
						$key = preg_replace('/_wpcf7/', '', $key, 1);
						if($key){
							$key = preg_replace('/_/', '', $key, 1);
						} else {
							$key = 'ID';
						}
						$data['wpcf7'][$key] = $value;
					} else {
						$data['posted_data'][$key] = $value;
					}
				}
				if(preg_match('/^wpcf7-f(\d+)-p(\d+)-o(\d+)$/', $data['wpcf7']['unit_tag'], $matches)){
					if(count($matches) == 4){
						$post = get_post(absint($matches[2]));
						if($post){
							$data['post']['ID'] = $post->ID;
							$data['post']['name'] = $post->post_name;
							$data['post']['title'] = $post->post_title;
						}
					}
				}
			}
			$uploaded_files = $submission->uploaded_files();
			if($uploaded_files){
				foreach($uploaded_files as $key => $value){
					$data['uploaded_files'][$key] = $value;
				}
			}
		}
		$post_id = 0;
		if(!$post_id){
			$post_id = wp_insert_post(array(
				'post_status' => 'private',
				'post_title' => sprintf('[contact-form-7 id="%1$d" title="%2$s"]', $data['wpcf7']['ID'], $data['contact_form']['title']),
				'post_type' => 'contacto'
			));
		}
		if($post_id){
			foreach($data['contact_form'] as $key => $value){
				add_post_meta($post_id, 'contact_form_' . $key, $value, true);
			}
			foreach($data['submission'] as $key => $value){
				add_post_meta($post_id, 'submission_' . $key, $value, true);
			}
			foreach($data['wpcf7'] as $key => $value){
				add_post_meta($post_id, 'wpcf7_' . $key, $value, true);
			}
			if($data['posted_data']){
				foreach($data['posted_data'] as $key => $value){
					update_post_meta($post_id, $key, $value);
				}
			}
			if($data['post']){
				foreach($data['post'] as $key => $value){
					add_post_meta($post_id, 'post_' . $key, $value, true);
				}
			}
			if($data['uploaded_files']){
				foreach($data['uploaded_files'] as $key => $value){
					update_post_meta($post_id, 'uploaded_files_' . $key, $value); // no guarda archivo
				}
			}
			do_action('save_contacto', $post_id);
		}
	}
	add_action('wp_head', 'vi_wp_head');
	function vi_wp_head(){ ?>
		<style>
			div.wpcf7-response-output {
				padding: 15px;
				margin-bottom: 20px;
				border: 1px solid transparent;
				border-radius: 4px;
			}
			div.wpcf7-mail-sent-ok {
				color: #3c763d;
				background-color: #dff0d8;
				border-color: #d6e9c6;
			}
			div.wpcf7-mail-sent-ng {
				color: #a94442;
				background-color: #f2dede;
				border-color: #ebccd1;
			}
			div.wpcf7-spam-blocked {
				color: #a94442;
				background-color: #f2dede;
				border-color: #ebccd1;
			}
			div.wpcf7-validation-errors {
				color: #8a6d3b;
				background-color: #fcf8e3;
				border-color: #faebcc;
			}
		</style>
		<script>
			thank_you = {
				'onSubmit': function(){
					jQuery('.wpcf7-submit').removeClass('disabled');
				},
				'onSentOk': function(unit_tag, url){
					if(typeof unit_tag !== 'undefined'){
						var uniqid = jQuery('div#' + unit_tag).find('input[name="_wpcf7_uniqid"]').val();
						var a = document.createElement('a');
						var href = '';
						if(typeof url !== 'undefined'){
							a.href = url;
						} else {
							a.href = jQuery(location).attr('href');
						}
						if(a.protocol){
							href += a.protocol + '//';
						}
						if(a.hostname){
							href += a.hostname;
						}
						if(a.port){
							href += a.port;
						}
						if(a.pathname){
							href += a.pathname;
						}
						if(a.search){
							if(a.search){
								var search = [];
								var search_object = {};
								var search_array = a.search.replace('?', '').split('&');
								for(i = 0; i < search_array.length; i ++){
			                        search_object[search_array[i].split('=')[0]] = search_array[i].split('=')[1];
			                    }
			                    jQuery.each(search_object, function(key, value){
			                    	if(key != 'wpcf7_referer'){
			                    		search.push(key + '=' + value);
			                    	}
			                    });
			                    if(search.length > 0){
			                    	href += '?' + search.join('&') + '&';
			                    } else {
			                    	href += '?';
			                    }
							}
						} else {
							href += '?';
						}
						href += 'wpcf7_referer=' + uniqid;
						if(a.hash){
							href += a.hash;
						}
						jQuery(location).attr('href', href);
					}
				}
			};
			jQuery(document).on('ready', function(){
				jQuery('.wpcf7-form').on('keydown', ':input:not(textarea)', function(e){
					if(e.keyCode == 13) {
						e.preventDefault();
					} else {
						if(jQuery(this).is('input[type=submit]') && e.keyCode == 32){
							e.preventDefault();
						}
					}
				});
				jQuery('.wpcf7-submit').addClass('btn').on('click', function(){
					jQuery('.wpcf7-submit').addClass('disabled');
				});
			});
		</script><?php
	}
	add_filter('wpcf7_ajax_json_echo', 'vi_wpcf7_ajax_json_echo', 10, 2);
	function vi_wpcf7_ajax_json_echo($items, $result){
		$items['onSubmit'] = array_merge((array) $items['onSubmit'], (array) wpcf7_strip_quote('thank_you.onSubmit();'));
		if(isset($_POST['_wpcf7'])){
			$id = (int) $_POST['_wpcf7'];
			$unit_tag = wpcf7_sanitize_unit_tag($_POST['_wpcf7_unit_tag']);
			if($contact_form = wpcf7_contact_form($id)){
				$redirect = $contact_form->additional_setting('on_sent_ok_redirect', false);
				if(!empty($redirect)){
					$result['scripts_on_sent_ok_redirect'] = array_map('wpcf7_strip_quote', $redirect);
					if(!empty($result['scripts_on_sent_ok_redirect'])){
						if($contact_form->is_true('on_sent_ok_redirect')){
							$url = '';
						} else {
							$url = filter_var($result['scripts_on_sent_ok_redirect'][0], FILTER_SANITIZE_URL);
						}
						$items['onSentOk'] = array_merge((array) $items['onSentOk'], (array) wpcf7_strip_quote('thank_you.onSentOk(\'' . $unit_tag .  '\',\'' . $url .  '\');'));
					}
				}
			}
		}
		return $items;
	}

	//custom select contact form 7
	function dynamic_select_list($tag, $unused) {
		//[select* pais3 from_json:paises include_blank]
		
		$options = (array)$tag['options'];
		foreach ($options as $option) {
			if (preg_match('%^from_json:([-0-9a-zA-Z_]+)$%', $option, $matches)) {
				$from_json = $matches[1];
			}
		}		
		
		if(!isset($from_json)) {
			return $tag;
		}
		
		// get the existing WPCF7_Pipe objects
		$befores = $tag['pipes']->collect_befores();
		$afters = $tag['pipes']->collect_afters();
		// add the existing WPCF7_Pipe objects to the new pipes array
		
		$pipes_new = array();
		for ($i=0; $i < count($befores); $i++) {
			$pipes_new[] = $befores[$i] . '|' . $afters[$i];
		}
		if($from_json === 'paises') {
			$url = 'http://ommayau.com/paises.json';
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_TIMEOUT, 5);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$res_pl = curl_exec($ch);
			curl_close($ch);
			$pl=json_decode($res_pl, true);
			
			if (!$pl) {
				return $tag;
			}
	    foreach ( $pl as $p ) {  
	        $tag['raw_values'][]  	= $p['Code'];  
	        $tag['values'][] 				= $p['Code'];  
	        $tag['labels'][] 				= $p['Name'];  
					$pipes_new[] = $p['Code'] . '|' . $p['Code'];
	    }  
		}
		// setup all the WPCF7_Pipe objects
		$tag['pipes'] = new WPCF7_Pipes($pipes_new);

		return $tag;
	}
	add_filter('wpcf7_form_tag', 'dynamic_select_list', 10, 2);