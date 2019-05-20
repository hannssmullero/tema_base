<?php
$proseso = get_post(263);
$id_proseso = $proseso->ID;
$title_proseso = $proseso->post_title;
$content_proceso = $proseso->post_content;

$paso1 = get_post_meta($proseso->ID, 'paso1', true);
$paso2 = get_post_meta($proseso->ID, 'paso2', true);
$paso3 = get_post_meta($proseso->ID, 'paso3', true);



?>
<div id="admision">
	<div style="height: 180px;"></div>
	<div class="visible-lg visible-md">
		<div class="fondoadmision">
			<div class="contenido-proceso color-fondo-admision">
				<div class="container">
					<div class="row">
						<div class="col-sm-9">
							<!--<h1 class="title-proceso">¿Estás interesado en estudiar nuestro Máster?</h1>
							<p>Estos son los pasos a seguir:</p>-->
							<div><?php echo $content_proceso ?></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9">
							<div class="row">
								<div class="col-sm-3">
									<div class="wow fadeIn"><img src="<?php echo IMAGES?>/unoimg.png" class="img-responsive"></div>
									<div class="pasos-proceso wow fadeInUp"><?php echo $paso1 ?></div>
									  <a id="esconder" class="" data-toggle="modal" data-target="#myModal">SOLICITUD +</a>
								</div>
								<div class="col-sm-1">
									<div class="wow fadeInLeft" data-wow-delay="0.5s"><img style="margin-top: 150%;" src="<?php echo IMAGES?>/flecha.png" class="img-responsive"></div>
								</div>
								<div class="col-sm-3">
									<div class="wow fadeIn" data-wow-delay="1s"><img src="<?php echo IMAGES?>/dosimg.png" class="img-responsive"></div>
									<div class="pasos-proceso wow fadeInUp" data-wow-delay="1s"><?php echo $paso2 ?></div>
								</div>
								<div class="col-sm-1">
									<div class="wow fadeInLeft" data-wow-delay="1.3s"><img style="margin-top: 150%;" src="<?php echo IMAGES?>/flecha.png" class="img-responsive"></div>
								</div>
								<div class="col-sm-3">
									<div class="wow fadeIn" data-wow-delay="1.5s"><img src="<?php echo IMAGES?>/tresimg.png" class="img-responsive"></div>
									<div class="pasos-proceso wow fadeInUp" data-wow-delay="1.5s"><?php echo $paso3 ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="visible-sm visible-xs">
		<div class="fondoadmision">
			<div class="contenido-proceso color-fondo-admision">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<!--<h1 class="title-proceso">¿Estás interesado en estudiar nuestro Máster?</h1>
							<p>Estos son los pasos a seguir:</p>-->
							<div><?php echo $content_proceso ?></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="wow fadeInDown"><img src="<?php echo IMAGES?>/unoimg.png" class="img-responsive"></div>
							<div class="pasos-proceso wow fadeInDown"><?php echo $paso1 ?></div>
							  <a id="esconder" class="" data-toggle="modal" data-target="#myModal">SOLICITUD +</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="wow fadeInDown" data-wow-delay="0.5s"><img style="padding: 50px;" src="<?php echo IMAGES?>/flecha-abajo.png" class="img-responsive"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="wow fadeInDown" data-wow-delay="1s"><img src="<?php echo IMAGES?>/dosimg.png" class="img-responsive"></div>
							<div class="pasos-proceso wow fadeInDown" data-wow-delay="2s"><?php echo $paso2 ?></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="wow fadeInDown" data-wow-delay="1.3s"><img style="padding: 50px;" src="<?php echo IMAGES?>/flecha-abajo.png" class="img-responsive"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="wow fadeInDown" data-wow-delay="1.5s"><img src="<?php echo IMAGES?>/tresimg.png" class="img-responsive"></div>
							<div class="pasos-proceso wow fadeInDown" data-wow-delay="1.5s"><?php echo $paso3 ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
        <a type="" class="close" data-dismiss="modal"><i style="color:#fff; font-size: 2em;" class="fa fa-times" aria-hidden="true"></i></a>
        <div>

		  <!-- Nav tabs -->
		 <!-- <ul class="nav nav-pills nav-justified" id="mytabs">
		    <li role="presentation" class="active"><a href="#admisiones" aria-controls="admisiones" role="tab" data-toggle="tab">Solicitud de admisión</a></li>
		    <li role="presentation"><a href="#formacion" aria-controls="formacion" role="tab" data-toggle="tab">Formación o Estudios</a></li>
		    <li role="presentation"><a href="#titulos" aria-controls="titulos" role="tab" data-toggle="tab">Títulos Académicos</a></li>
		 </ul>-->
			<form id="formValue" class="form-horizontal" method="post" action="enviar" enctype="multipart/form-data">
				<fieldset>
			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="admisiones">
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="nombre">Nombres *</label>  
						  <div class="col-md-6">
						  <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md" required>
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="apellido">Apellidos *</label>  
						  <div class="col-md-6">
						  <input id="apellido" name="apellido" type="text" placeholder="" class="form-control input-md" required>
						    
						  </div>
						</div>
						
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="nacionalidad">DNI - pasaporte - documento de identidad *</label>
						  <div class="col-md-6">						    
						    <input id="dni" name="dni" type="text" placeholder="" class="form-control input-md" required>
						  </div>
						</div>
						
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="nacionalidad">Nacionalidad *</label>
						  <div class="col-md-6">						    
						    <select class="required form-control" name="nacionalidad" id="nacionalidad"><option value="default">Seleccione un país</option><option value="Afganistán">Afganistán</option><option value="Albania">Albania</option><option value="Alemania">Alemania</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua y Barbuda">Antigua y Barbuda</option><option value="Antillas Holandesas">Antillas Holandesas</option><option value="Arabia Saudí">Arabia Saudí</option><option value="Argelia">Argelia</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaiyán">Azerbaiyán</option><option value="Bahamas">Bahamas</option><option value="Bahrein">Bahrein</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Bélgica">Bélgica</option><option value="Belice">Belice</option><option value="Benín">Benín</option><option value="Bermudas">Bermudas</option><option value="Bielorrusia">Bielorrusia</option><option value="Bolivia">Bolivia</option><option value="Botswana">Botswana</option><option value="Bosnia">Bosnia</option><option value="Brasil">Brasil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="BurkinaFaso">BurkinaFaso</option><option value="Burundi">Burundi</option><option value="Bután">Bután</option><option value="Cabo Verde">Cabo Verde</option><option value="Camboya">Camboya</option><option value="Camerún">Camerún</option><option value="Canadá">Canadá</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Chipre">Chipre</option><option value="Colombia">Colombia</option><option value="Comoras">Comoras</option><option value="Congo">Congo</option><option value="Corea del Norte">Corea del Norte</option><option value="Corea del Sur">Corea del Sur</option><option value="Costa de Marfil">Costa de Marfil</option><option value="Costa Rica">Costa Rica</option><option value="Croacia">Croacia</option><option value="Cuba">Cuba</option><option value="Dinamarca">Dinamarca</option><option value="Dominica">Dominica</option><option value="Dubai">Dubai</option><option value="Ecuador">Ecuador</option><option value="Egipto">Egipto</option><option value="El Salvador">El Salvador</option><option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option><option value="Eritrea">Eritrea</option><option value="Eslovaquia">Eslovaquia</option><option value="Eslovenia">Eslovenia</option><option value="España">España</option><option value="Estados Unidos de América">Estados Unidos de América</option><option value="Estonia">Estonia</option><option value="Etiopía">Etiopía</option><option value="Fiyi">Fiyi</option><option value="Filipinas">Filipinas</option><option value="Finlandia">Finlandia</option><option value="Francia">Francia</option><option value="Gabón">Gabón</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Ghana">Ghana</option><option value="Grecia">Grecia</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guayana Francesa">Guayana Francesa</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guinea Ecuatorial">Guinea Ecuatorial</option><option value="Guinea">Guinea</option><option value="Guyana">Guyana</option><option value="Granada">Granada</option><option value="Haití">Haití</option><option value="Honduras">Honduras</option><option value="HongKong">HongKong</option><option value="Hungría">Hungría</option><option value="Holanda">Holanda</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Irak">Irak</option><option value="Irán">Irán</option><option value="Irlanda">Irlanda</option><option value="Islandia">Islandia</option><option value="Islas Caimán">Islas Caimán</option><option value="Islas Marshall">Islas Marshall</option><option value="Islas Pitcairn">Islas Pitcairn</option><option value="Islas Salomón">Islas Salomón</option><option value="Israel">Israel</option><option value="Italia">Italia</option><option value="Jamaica">Jamaica</option><option value="Japón">Japón</option><option value="Jordania">Jordania</option><option value="Kazajstán">Kazajstán</option><option value="Kenia">Kenia</option><option value="Kirguistán">Kirguistán</option><option value="Kiribati">Kiribati</option><option value="Kósovo">Kósovo</option><option value="Kuwait">Kuwait</option><option value="Laos">Laos</option><option value="Lesotho">Lesotho</option><option value="Letonia">Letonia</option><option value="Líbano">Líbano</option><option value="Liberia">Liberia</option><option value="Libia">Libia</option><option value="Liechtenstein">Liechtenstein</option><option value="Lituania">Lituania</option><option value="Luxemburgo">Luxemburgo</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malasia">Malasia</option><option value="Malawi">Malawi</option><option value="Maldivas">Maldivas</option><option value="Malí">Malí</option><option value="Malta">Malta</option><option value="Marianas del Norte">Marianas del Norte</option><option value="Marruecos">Marruecos</option><option value="Mauricio">Mauricio</option><option value="Mauritania">Mauritania</option><option value="México">México</option><option value="Micronesia">Micronesia</option><option value="Mónaco">Mónaco</option><option value="Moldavia">Moldavia</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Nicaragua">Nicaragua</option><option value="Níger">Níger</option><option value="Nigeria">Nigeria</option><option value="Noruega">Noruega</option><option value="NuevaZelanda">NuevaZelanda</option><option value="Omán">Omán</option><option value="OrdendeMalta">OrdendeMalta</option><option value="Países Bajos">Países Bajos</option><option value="Pakistán">Pakistán</option><option value="Palestina">Palestina</option><option value="Palau">Palau</option><option value="Panamá">Panamá</option><option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option><option value="Paraguay">Paraguay</option><option value="Perú">Perú</option><option value="Polonia">Polonia</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reino Unido">Reino Unido</option><option value="República Centro africana">República Centro africana</option><option value="República Checa">República Checa</option><option value="República del Congo">República del Congo</option><option value="República Democrática del Congo">República Democrática del Congo</option><option value="República Dominicana">República Dominicana</option><option value="Ruanda">Ruanda</option><option value="Rumania">Rumania</option><option value="Rusia">Rusia</option><option value="Sáhara Occidental">Sáhara Occidental</option><option value="SaintKitts-Nevis">SaintKitts-Nevis</option><option value="Samoa Americana">Samoa Americana</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Santa Lucía">Santa Lucía</option><option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option><option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="SierraLeona">SierraLeona</option><option value="Singapur">Singapur</option><option value="Siria">Siria</option><option value="Somalia">Somalia</option><option value="SriLanka">SriLanka</option><option value="Sudáfrica">Sudáfrica</option><option value="Sudán">Sudán</option><option value="Suecia">Suecia</option><option value="Suiza">Suiza</option><option value="Suazilandia">Suazilandia</option><option value="Tailandia">Tailandia</option><option value="Taiwán">Taiwán</option><option value="Tanzania">Tanzania</option><option value="Tayikistán">Tayikistán</option><option value="Tíbet">Tíbet</option><option value="TimorOriental">TimorOriental</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad y Tobago">Trinidad y Tobago</option><option value="Túnez">Túnez</option><option value="Turkmenistán">Turkmenistán</option><option value="Turquía">Turquía</option><option value="Tuvalu">Tuvalu</option><option value="Ucrania">Ucrania</option><option value="Uganda">Uganda</option><option value="Uruguay">Uruguay</option><option value="Uzbequistán">Uzbequistán</option><option value="Vanuatu">Vanuatu</option><option value="Vaticano">Vaticano</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="WallisyFutuna">WallisyFutuna</option><option value="Yemen">Yemen</option><option value="Yibuti">Yibuti</option><option value="Zambia">Zambia</option><option value="Zaire">Zaire</option><option value="Zimbabue">Zimbabue</option></select>
						  </div>
						</div>
						
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="pais">País de residencia *</label>
						  <div class="col-md-6">						   
						   <select class="form-control" name="pais" required="required"><option value="" selected="selected">País *</option><option value="AF">Afganistán</option><option value="AX">Åland</option><option value="AL">Albania</option><option value="DE">Alemania</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguila</option><option value="AQ">Antártida</option><option value="AG">Antigua y Barbuda</option><option value="AN">Antillas Neerlandesas</option><option value="SA">Arabia Saudita</option><option value="DZ">Argelia</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaiyán</option><option value="BS">Bahamas</option><option value="BH">Bahréin</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Bielorrusia</option><option value="BE">Bélgica</option><option value="BZ">Belice</option><option value="BJ">Benín</option><option value="BM">Bermudas</option><option value="BT">Bután</option><option value="BO">Bolivia</option><option value="BA">Bosnia y Herzegovina</option><option value="BW">Botsuana</option><option value="BV">Isla Bouvet</option><option value="BR">Brasil</option><option value="BN">Brunéi</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CV">Cabo Verde</option><option value="KY">Islas Caimán</option><option value="KH">Camboya</option><option value="CM">Camerún</option><option value="CA">Canadá</option><option value="CF">República Centroafricana</option><option value="TD">Chad</option><option value="CZ">República Checa</option><option value="CL">Chile</option><option value="CN">China</option><option value="CY">Chipre</option><option value="CC">Islas Cocos</option><option value="CO">Colombia</option><option value="KM">Comoras</option><option value="CG">República del Congo</option><option value="CD">República Democrática del Congo</option><option value="CK">Islas Cook</option><option value="KP">Corea del Norte</option><option value="KR">Corea del Sur</option><option value="CI">Costa de Marfil</option><option value="CR">Costa Rica</option><option value="HR">Croacia</option><option value="CU">Cuba</option><option value="DK">Dinamarca</option><option value="DM">Dominica</option><option value="DO">República Dominicana</option><option value="EC">Ecuador</option><option value="EG">Egipto</option><option value="SV">El Salvador</option><option value="AE">Emiratos Árabes Unidos</option><option value="ER">Eritrea</option><option value="SK">Eslovaquia</option><option value="SI">Eslovenia</option><option value="ES">España</option><option value="US">Estados Unidos</option><option value="UM">Islas ultramarinas de Estados Unidos</option><option value="EE">Estonia</option><option value="ET">Etiopía</option><option value="FO">Islas Feroe</option><option value="PH">Filipinas</option><option value="FI">Finlandia</option><option value="FJ">Fiyi</option><option value="FR">Francia</option><option value="GA">Gabón</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Islas Georgias del Sur y Sandwich del Sur</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GD">Granada</option><option value="GR">Grecia</option><option value="GL">Groenlandia</option><option value="GP">Guadalupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GF">Guayana Francesa</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Ecuatorial</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haití</option><option value="HM">Islas Heard y McDonald</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungría</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Irán</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islandia</option><option value="IL">Israel</option><option value="IT">Italia</option><option value="JM">Jamaica</option><option value="JP">Japón</option><option value="JE">Jersey</option><option value="JO">Jordania</option><option value="KZ">Kazajistán</option><option value="KE">Kenia</option><option value="KG">Kirguistán</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesoto</option><option value="LV">Letonia</option><option value="LB">Líbano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Luxemburgo</option><option value="MO">Macao</option><option value="MK">ARY Macedonia</option><option value="MG">Madagascar</option><option value="MY">Malasia</option><option value="MW">Malawi</option><option value="MV">Maldivas</option><option value="ML">Malí</option><option value="MT">Malta</option><option value="FK">Islas Malvinas</option><option value="IM">Isla de Man</option><option value="MP">Islas Marianas del Norte</option><option value="MA">Marruecos</option><option value="MH">Islas Marshall</option><option value="MQ">Martinica</option><option value="MU">Mauricio</option><option value="MR">Mauritania</option><option value="YT">Mayotte</option><option value="MX">México</option><option value="FM">Micronesia</option><option value="MD">Moldavia</option><option value="MC">Mónaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambique</option><option value="MM">Birmania</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="CX">Isla de Navidad</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Níger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk</option><option value="NO">Noruega</option><option value="NC">Nueva Caledonia</option><option value="NZ">Nueva Zelanda</option><option value="OM">Omán</option><option value="NL">Países Bajos</option><option value="PK">Pakistán</option><option value="PW">Palaos</option><option value="PS">Territorios palestinos</option><option value="PA">Panamá</option><option value="PG">Papúa Nueva Guinea</option><option value="PY">Paraguay</option><option value="PE">Perú</option><option value="PN">Islas Pitcairn</option><option value="PF">Polinesia Francesa</option><option value="PL">Polonia</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="GB">Reino Unido</option><option value="RE">Reunión</option><option value="RW">Ruanda</option><option value="RO">Rumania</option><option value="RU">Rusia</option><option value="EH">Sahara Occidental</option><option value="SB">Islas Salomón</option><option value="WS">Samoa</option><option value="AS">Samoa Americana</option><option value="KN">San Cristóbal y Nieves</option><option value="SM">San Marino</option><option value="PM">San Pedro y Miquelón</option><option value="VC">San Vicente y las Granadinas</option><option value="SH">Santa Helena</option><option value="LC">Santa Lucía</option><option value="ST">Santo Tomé y Príncipe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leona</option><option value="SG">Singapur</option><option value="SY">Siria</option><option value="SO">Somalia</option><option value="LK">Sri Lanka</option><option value="SZ">Suazilandia</option><option value="ZA">Sudáfrica</option><option value="SD">Sudán</option><option value="SE">Suecia</option><option value="CH">Suiza</option><option value="SR">Surinam</option><option value="SJ">Svalbard y Jan Mayen</option><option value="TH">Tailandia</option><option value="TW">República de China</option><option value="TZ">Tanzania</option><option value="TJ">Tayikistán</option><option value="IO">Territorio Británico del Océano Índico</option><option value="TF">Territorios Australes Franceses</option><option value="TL">Timor Oriental</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad y Tobago</option><option value="TN">Túnez</option><option value="TC">Islas Turcas y Caicos</option><option value="TM">Turkmenistán</option><option value="TR">Turquía</option><option value="TV">Tuvalu</option><option value="UA">Ucrania</option><option value="UG">Uganda</option><option value="EU">Unión Europea</option><option value="SU">Unión Soviética</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistán</option><option value="VA">Ciudad del Vaticano</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Islas Vírgenes Británicas</option><option value="VI">Islas Vírgenes Estadounidenses</option><option value="WF">Wallis y Futuna</option><option value="YE">Yemen</option><option value="DJ">Yibuti</option><option value="ZM">Zambia</option><option value="ZW">Zimbabue</option><option value="CS">Serbia y Montenegro</option><option value="VU">Vanuatu</option></select> 
						  </div>
						</div>
						
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="ciudad">Ciudad de residencia *</label>  
						  <div class="col-md-6">
						  <input id="ciudad" name="ciudad" type="text" placeholder="" class="form-control input-md" required>
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="direccion">Dirección *</label>  
						  <div class="col-md-6">
						  <input id="direccion" name="direccion" type="text" placeholder="" class="form-control input-md" required>
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="codigo">Codigo postal *</label>  
						  <div class="col-md-6">
						  <input id="codigo" name="codigo" type="text" placeholder="" class="form-control input-md" required>
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="telefono">Teléfono de contacto *<br><small>(código de área + número)</small></label>  
						  <div class="col-md-6">
						  <input id="telefono" name="telefono" type="text" placeholder="" class="form-control input-md" required>
						  </div>
						</div>
						
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="correo">Correo electrónico *</label>  
						  <div class="col-md-6">
						  <input id="correo" name="correo" type="text" placeholder="" class="form-control input-md" required>
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="fechanac">Fecha de nacimiento *<br/><small>dd/mm/yyyy</small></label>  
						  <div class="col-md-6">
						  <input id="fechanac" name="fechanac" type="text" placeholder="" class="form-control input-md" required>
						  </div>
						</div>
						<!------------------------------------------------------------------------------------------>
						
						<div class="form-group">
						  <label class="col-md-4 control-label" for="como">¿Cómo se han enterado de la existencia del máster? *</label>
						  <div class="col-md-6">						    
						    <select class="required form-control" name="como" id="como"><option value="">Seleccione un medio</option><option style="color:#999;" value="-" disabled="disabled">---</option><option style="color:#999;" value="Redes sociales" disabled="disabled">Redes sociales</option><option value="Facebook">Facebook</option><option value="Twitter">Twitter</option><option value="Otra">Otra</option><option style="color:#999;" value="--" disabled="disabled">---</option><option style="color:#999;" value="Medios" disabled="disabled">Medios</option><option value="La Gaceta">La Gaceta</option><option value="Libertad digital">Libertad digital</option><option value="Expansión">Expansión</option><option value="El Mundo">El Mundo</option><option value="Ok Diario">Ok Diario</option><option value="Otro medio">Otro medio</option><option style="color:#999;" value="---" disabled="disabled">---</option><option value="Foros especializados">Foros especializados</option><option value="Internet">Internet</option><option value="Otro">Otro</option></select>
						  </div>
						</div>
						
						<!-- Select Basic -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="master">Programa *</label>
						  <div class="col-md-6">
						    <select id="master" name="master" class="form-control">
						      <option value="" selected="selected" disabled="disabled">---</option>
						      <optgroup label="Másters">
						      	<option value="Máster en Value Investing y Teoría del Ciclo">Máster en Value Investing y Teoría del Ciclo</option>	
						      </optgroup>
						    </select>
						  </div>
						</div>
						
						<!-- File Button --> 
						<div class="form-group">
						  <label class="col-md-4 control-label" for="archivo">CV *<br><small>(.docx, .doc, .dotm, .dotx, .pdf)*</small></label>
						  <div class="col-md-8">
						    <input data-max-size="20971520" type="file" name="cv" id="cv" class="inputfile inputfile-6" >
						    <label id="cv_error"></label>
						  </div>
						</div>
					
						<!-- File Button --> 
						<div class="form-group">
						  <label class="col-md-4 control-label" for="archivo">Fotografía *<br><small>(.png, .jpg, .jpeg, .gif, .pdf)*</small></label>
						  <div class="col-md-8">
						    <input data-max-size="20971520 " type="file" name="foto" id="foto" class="inputfile inputfile-6" >
						    <label id="foto_error"></label>
						  </div>
						</div>
						
						<!-- File Button --> 
						<div class="form-group">
						  <label class="col-md-4 control-label" for="archivo">Fotocopia DNI *<br><small>(.png, .jpg, .jpeg, .gif, .pdf)*</small></label>
						  <div class="col-md-8">
						    <input data-max-size="20971520 " type="file" name="fotocopia" id="fotocopia" class="inputfile inputfile-6" >
						    <label id="fotocopia_error"></label>
						  </div>
						</div>				
						<br/>
						<!------------------------------------------------------------------------------------------------------>
						
						<!-- Select Basic -->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="master">Máster al que desea aplicar *</label>
						  <div class="col-md-6">
						    <select id="master" name="master" class="form-control">
						      <option value="Máster en Value Investing y Teoría del Ciclo">Máster en Value Investing y Teoría del Ciclo</option>
						    </select>
						  </div>
						</div>
						
						<!-- Select Basic -->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="como">¿Cómo se han enterado de la existencia del máster? *</label>
						  <div class="col-md-6">						    
						    <select class="required form-control" name="como" id="como"><option value="default">Seleccione un medio</option><option style="color:#999;" value="-" disabled="disabled">---</option><option style="color:#999;" value="Redes sociales" disabled="disabled">Redes sociales</option><option value="Facebook">Facebook</option><option value="Twitter">Twitter</option><option value="Otra">Otra</option><option style="color:#999;" value="--" disabled="disabled">---</option><option style="color:#999;" value="Medios" disabled="disabled">Medios</option><option value="La Gaceta">La Gaceta</option><option value="Libertad digital">Libertad digital</option><option value="Expansión">Expansión</option><option value="El Mundo">El Mundo</option><option value="Ok Diario">Ok Diario</option><option value="Otro medio">Otro medio</option><option style="color:#999;" value="---" disabled="disabled">---</option><option value="Foros especializados">Foros especializados</option><option value="Internet">Internet</option><option value="Otro">Otro</option></select>
						  </div>
						</div>
						
						<!-- Textarea -->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="estudiar">¿Por qué quieres estudiar con nosotros? *</label>
						  <div class="col-md-4">                     
						    <textarea class="form-control" id="estudiar" name="estudiar"></textarea>
						  </div>
						</div>
						
						<!-- File Button --> 
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="archivo">Adjunta tu Currículum Vitae *</label>
						  <div class="col-md-4">
						    <input id="archivo" name="archivo" class="input-file" type="file">
						  </div>
						</div>
						
						<!-- Multiple Checkboxes -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="aceptas">¿Aceptas nuestras condiciones y políticas?</label>
						  <div class="col-md-4">
						  <div class="checkbox">
						    <label for="aceptas-0">
						      <input type="checkbox" name="aceptas" id="aceptas-0" value="si">
						      Seleccionar esta opción significa que aceptas la política de privacidad y las condiciones de uso de Activolead.com
						    </label>
							</div>
						  </div>
						</div>						
						<!--<a  class="pull-right siguiente">SIGUIENTE <span class=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
						

						
				</div>
			    <div role="tabpanel" class="tab-pane" id="formacion">
			    	<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="centro1">Centro 1</label>  
						  <div class="col-md-6">
						  <input id="centro1" name="centro1" type="text" placeholder="" class="form-control input-md">
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="estudios1">Estudios 1</label>  
						  <div class="col-md-6">
						  <input id="estudios1" name="estudios1" type="text" placeholder="" class="form-control input-md">
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="centro2">Centro 2</label>  
						  <div class="col-md-6">
						  <input id="centro2" name="centro2" type="text" placeholder="" class="form-control input-md">
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="estudios2">Estudios 2</label>  
						  <div class="col-md-6">
						  <input id="estudios2" name="estudios2" type="text" placeholder="" class="form-control input-md">
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="centro3">Centro 3</label>  
						  <div class="col-md-6">
						  <input id="centro3" name="centro3" type="text" placeholder="" class="form-control input-md">
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="estudios3">Estudios 3</label>  
						  <div class="col-md-6">
						  <input id="estudios3" name="estudios3" type="text" placeholder="" class="form-control input-md">						    
						  </div>
						</div>
						<a  class="pull-right siguiente">SIGUIENTE <span class=""><i style="font-size:1.5em; color:#fff;" class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="titulos">
			    	<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="centrotitulo1">Centro 1</label>  
						  <div class="col-md-6">
						  <input id="centrotitulo1" name="centrotitulo1" type="text" placeholder="" class="form-control input-md">
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="titulo1">Título 1</label>  
						  <div class="col-md-6">
						  <input id="titulo1" name="titulo1" type="text" placeholder="" class="form-control input-md">
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="centrotitulo2">Centro 2</label>  
						  <div class="col-md-6">
						  <input id="centrotitulo2" name="centrotitulo2" type="text" placeholder="" class="form-control input-md">
						  </div>
						</div>
						
						<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="titulo2">Título 2</label>  
						  <div class="col-md-6">
						  <input id="titulo2" name="titulo2" type="text" placeholder="" class="form-control input-md">
						  </div>
						</div>
						
						<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="centrotitulo3">Centro 3</label>  
						  <div class="col-md-6">
						  <input id="centrotitulo3" name="centrotitulo3" type="text" placeholder="" class="form-control input-md">
						    
						  </div>
						</div>
						
						<!-- Text input-->
						<!--<div class="form-group">
						  <label class="col-md-4 control-label" for="titulo3">Título 3</label>  
						  <div class="col-md-6">
						  <input id="titulo3" name="titulo3" type="text" placeholder="" class="form-control input-md">
						  </div>
						</div>
						<!-- Button -->
					
						<input type="hidden" name="token" value="0f7ae106a2331563ff76294fcead6a1d" >
					    <button id="enviar" name="enviar" type="submit" class="btn btn-formulario pull-right" disabled="disabled">ENVIAR</button>
						 
				    </div>
				  </div>
			  </fieldset>
			  </form>
			  
			  <script>
							
					//var CVValido = false;
					
					jQuery('#cv').change(function(){
						
						CVValido = false;
						
						var fileInCV = jQuery('#cv');
						var maxSize = fileInCV.data('max-size');
						var fileSizeCV = fileInCV.get(0).files[0].size; // in bytes
						var nameCV = fileInCV.get(0).files[0].name;
						var extCV = nameCV.substr((nameCV.lastIndexOf('.') + 1));
						
						if(fileSizeCV < 1){
							
						}else if(fileSizeCV>maxSize){
				 		 	jQuery("#cv_error").html("El archivo es demasidado pesado");
				 		 	jQuery("#enviar").attr("disabled", "disabled");
				 		 	CVValido = false;
				 		 	console.log(CVValido);
				 		}else if(jQuery.inArray(extCV , ["docx", "doc", "dot", "dotm", "dotx", "pdf"] ) == -1){
				 			jQuery("#cv_error").html("El tipo de archivo no es permitido");
				 			jQuery("#enviar").attr("disabled", "disabled");
				 			CVValido = false;
				 		}else {
				 			jQuery("#cv_error").html("");
				 			CVValido = true;
				 		}
				 		
				 		if(CVValido == true && FotoValido == true && CopiaValido == true){
							jQuery("#enviar").removeAttr("disabled")
						}
							
					});
					
					jQuery('#foto').change(function(){
						
						CVFoto = false;
						
						var fileInFoto = jQuery('#foto');
						var maxSize = fileInFoto.data('max-size');
						var fileSizeFoto = fileInFoto.get(0).files[0].size; // in bytes
						var nameFoto = fileInFoto.get(0).files[0].name;
						var extFoto = nameFoto.substr((nameFoto.lastIndexOf('.') + 1));
						
						if(fileSizeFoto < 1){
							
						}else if(fileSizeFoto>maxSize){
				 		 	jQuery("#foto_error").html("El archivo es demasidado pesado");
				 		 	jQuery("#enviar").attr("disabled", "disabled");
				 		 	CVFoto = false;
				 		}else if(jQuery.inArray(extFoto , ["png", "jpg", "jpeg", "gif", "pdf"] ) == -1){
				 			jQuery("#foto_error").html("El tipo de archivo no es permitido");
				 			jQuery("#enviar").attr("disabled", "disabled");
				 			CVFoto = false;
				 		}else {
				 			jQuery("#foto_error").html("");
				 			FotoValido = true;
				 		}
				 		
				 		if(CVValido == true && FotoValido == true && CopiaValido == true){
							jQuery("#enviar").removeAttr("disabled")
						}
							
					});
					
					jQuery('#fotocopia').change(function(){
						
						CVCopia = false;
						
						var fileInCopia = jQuery('#fotocopia');
						var maxSize = fileInCopia.data('max-size');
						var fileSizeCopia = fileInCopia.get(0).files[0].size; // in bytes
						var nameCopia = fileInCopia.get(0).files[0].name;
						var extCopia = nameCopia.substr((nameCopia.lastIndexOf('.') + 1));
						
						if(fileSizeCopia < 1){
							
						}else if(fileSizeCopia>maxSize){
				 		 	jQuery("#fotocopia_error").html("El archivo es demasidado pesado");
				 		 	jQuery("#enviar").attr("disabled", "disabled");
				 		 	CVCopia = false;
				 		}else if(jQuery.inArray(extCopia , ["png", "jpg", "jpeg", "gif", "pdf"] ) == -1){
				 			jQuery("#fotocopia_error").html("El tipo de archivo no es permitido");
				 			jQuery("#enviar").attr("disabled", "disabled");
				 			CVCopia = false;
				 		}else {
				 			jQuery("#fotocopia_error").html("");
				 			CopiaValido = true;
				 		}
				 		
				 		if(CVValido == true && FotoValido == true && CopiaValido == true){
							jQuery("#enviar").removeAttr("disabled")
						}
							
					});
					
				</script>
			  
			</div>
        </div>
      </div>
    </div>
  </div>
