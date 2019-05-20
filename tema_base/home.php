<?php get_header(); ?>
<div id="menu-movil" class="visible-xs visible-sm" >
	<nav  style="z-index: 100000;">
		<div><img style="width: 30%; padding: 8px;" src="<?php echo IMAGES?>/logoomma.png" class="img-responsive"></div>
	  <div class="toggle"><span><a href="">Menu</a></span></div>
	  <div class="menu-container">
	    <ul class="menu visually-hidden">
	     	<?php 
				//Arguments for primary menu
				$args = array(
					'theme_location'    =>  'main_menu',
					'container'         =>  'div',
					'container_class'   =>  'main-menu-movil',
					'menu_class'        =>  'nav nav-pills nav-stacked',
					'menu_id'           =>  'nav-movil',
					'walker' => new wp_bootstrap_navwalker()
				);
	
				//Show menu
				if(has_nav_menu( 'main_menu' )){					
						wp_nav_menu( $args ); 
				}			
			?>		
	    </ul>
	  </div>
	</nav>
</div>
<div id="container" style="margin: 0;">
	<div class="logo visible-lg visible-md">
		<div><img style="display: block; margin: 0 auto;" src="<?php echo IMAGES?>/logoomma.png" class="img-responsive"></div>
	</div>
    <div id="slider">
    	
    	<?php
			
			$args = array( 'post_type' => 'carrusel', 'posts_per_page' => -1, 'order' => 'ASC', );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			
			$imageneshome = rwmb_meta( 'imagen-home' ); 
			
			$home = '';
			
			foreach ($imageneshome as $imagenhome){
				
				$home.= '<div data-background="'.$imagenhome['imagen'].'">';
				$home.='</div>';
			}
			
			echo $home; 
			 			
			endwhile;
		?>

    </div>
   
    <div class="footer-portada">
    	 <span class="controls">
	        <div style="display: block; margin: 0 auto" class="centeredDotsControls">
	        	<?php
	        	
	        		$cont = 0;
	        		foreach($imageneshome as $imagen){
	        		 $cont++;
						echo '<a class="sudoSliderLink" data-target="'.$cont.'" href="#"><span></span></a>';
	        		}
	        	 
	        	?>
	            
	        </div>
	    </span>
	    <div class="boton-home">
	    	<div class="wow bounce boton-down" data-wow-duration="3s" data-wow-iteration="10">
	    	<a id="bajar"><i  style="font-size:4em; color:#fff;"  class="fa fa-angle-down" aria-hidden="true"></i></a>
	    	</div>
	    </div>
    </div>
</div>
	<div class="visible-lg visible-md">
	<nav class="navbar navbar-fixed-top">
		<div id="menu-principal">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div><img id="logo" style="display: block; margin: 0 auto;" src="<?php echo IMAGES?>/logoomma.png" class="img-responsive"></div>
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
	</nav>
	</div>
	<script>
		jQuery(window).scroll(function () {
		    if (jQuery('#menu-principal').offset().top > 595) {
		    	jQuery('#menu-principal').fadeIn(500);
		    } else {
		       	jQuery('#menu-principal').stop().fadeOut(500);
		    }
		});
		
	</script>

	

<?php get_footer(); ?>
