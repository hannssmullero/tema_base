<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-2 col-lg-2">
			<div id="logof" class="logofooter ">
				<img src="<?php echo IMAGES?>/ommablanco.png" class="img-responsive">
			</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="direccion">
				<p><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/es/">Licencia de Creative Commons</a><br/> 
				© 2012 Online de Madrid Manuel Ayau</p>
				<p class="text-center"><a href="mailto:webmaster@ommayau.com">webmaster@ommayau.com</a></p>
				</div>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
				<div class="redes">
					<a href="https://www.facebook.com/OMMA-221494731279021/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="https://www.linkedin.com/company/3511810?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A3511810%2Cidx%3A3-1-11%2CtarId%3A1470062555650%2Ctas%3AommA" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
					<a href="https://twitter.com/ommayau" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					<span class="st_sharethis_custom"><i class="fa fa-share-alt" aria-hidden="true"></i></span>	
				</div>
			</div>			
		</div>
	</div>
</div>
	 <?php wp_footer() ?>
	 	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js'></script>
		<script>
		jQuery(document).ready(function () {
		
		    jQuery('#myModal form').validate({  // initialize plugin
						ignore: ".ignore",
						invalidHandler: function(e, validator){
						    if(validator.errorList.length)
						    $('#mytabs a[href="#' + jQuery(validator.errorList[0].element).closest(".tab-pane").attr('id') + '"]').tab('show')
						},						
						rules: {
							nombre:"required",
							apellido:"required",
							dni:"required",
							nacionalidad:"required",
							pais:"required",
							ciudad:"required",
							direccion:"required",
							codigo:"required",
							telefono:"required",
							correo :{
									required: true,
									email: true
								},
							fechanac:{
									required: true,
									//date: true,
								},
						},
						messages: {
							nombre:"Nombres requerido",
							apellido:"Apellidos requeridos",
							nacionalidad:"Nacionalidad requerida",
							dni:"DNI requerido",
							pais:"Pais requerido",
							ciudad:"Ciudad requerida",
							direccion:"Dirección requerida",
							codigo:"Codigo postal requerido",
							telefono:"Teléfono requerido",
							correo :"Correo electrónico requerido",
							fechanac:"Fecha de nacimiento requerida",
						},
		        highlight: function (element) {
		            		//console.log(jQuery(element));
		            		jQuery(element).closest('.control-group')
		                .removeClass('success').addClass('error');
		        },
		        success: function (element) {
		            element.addClass('valid').closest('.control-group')
		                .removeClass('error').addClass('success');
		        },
		        submitHandler: function (form) {
							form.submit();
	            // form validates so do the ajax
	            //return false; // ajax used, block the normal submit
		        }
		    });
		
		});			
		</script>  	 

</body>
</html>