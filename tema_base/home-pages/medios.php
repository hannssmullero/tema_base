<div id="medios">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-9">
				<?php
					$args = array( 'post_type' => 'videos', 'posts_per_page' => -1, 'order' => 'ASC', );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					$link = get_permalink();
					
					$videos = rwmb_meta( 'video-medios' );
				
				?>
				<h1 class="title-medios">Vídeos</h1>
				
				<?php
				$cont = 0;
				foreach($videos as $destacada){
					$cuadros1 = $destacada['video'];
					$cuadro1 = explode("v=", $cuadros1);
					
					$idimagen = $cuadro1[1];	
					if($cont == 0){
						?>
						<div class="video-medios">
							<img id="destacadaimg" src="<?php echo $destacada['imagen-video'] ?>" class="img-responsive">
							<div id="vervideomedio">
							<iframe id="destacadavideo" src="https://www.youtube.com/embed/<?php echo $idimagen ?>?rel=0" frameborder="0" allowfullscreen></iframe>
							</div>
							<div id="playvideomedios" class="wow bounce">
								<div class="imgplay">
								
								</div>
							</div>
							<!--<iframe id="destacadaimg" width="100%" height="460" src="https://www.youtube.com/embed/<?php echo $idimagen ?>?rel=0" frameborder="0" allowfullscreen></iframe>-->
							<div id="mostrar-info" class="">
								<p class="titulo"><?php echo $destacada['titulo']?></p>
								<p class="descripcion"><?php echo $destacada['descripcion']?></p>
							</div>
							<div id="video">
								
							</div>
						</div>
						<!--<div id="videomedios">
							<iframe id="destacadaimg" width="100%" height="460" src="https://www.youtube.com/embed/<?php echo $idimagen ?>?rel=0" frameborder="0" allowfullscreen></iframe>
							<!--<img src="http://img.youtube.com/vi/<?php echo $idimagen?>/maxresdefault.jpg" class="img-responsive">-->
						<!--</div>-->		
						<?php	
					}
					$cont++;
				} 
				?>
				
				<!-- Swiper  Desktop-->
				<div class="visible-lg visible-md">
			    <div class="swiper-container">
			        <div class="swiper-wrapper">
			        	<?php
			        	
			        	 foreach($videos as $imagen){
							 $cuadros = $imagen['video'];
							$cuadro=explode("v=", $cuadros);
							
							$idvideo = $cuadro[1];	
							
							?>
							<div class="swiper-slide">
								<div class="destacarimg" data-titulo="<?php echo $imagen['titulo'] ?>" data-descripcion="<?php echo $imagen['descripcion'] ?>" data-url="https://www.youtube.com/embed/<?php echo $idvideo ?>?rel=0"  data-enlace="<?php echo $imagen['imagen-video']?>">
									<!--<img src="http://img.youtube.com/vi/<?php echo $idvideo ?>/maxresdefault.jpg" class="img-responsive">-->
									<img style="height: 140px; width: 100%;" src="<?php echo $imagen['imagen-video'] ?>" class="img-responsive">
								</div>
							</div>
							<?php	
							
			        	}
						
						 ?>
			            
			        </div>
			        <!-- Add Arrows -->
			        <div class="swiper-button-next"></div>
			        <div class="swiper-button-prev"></div>
			    </div>
			    </div>
			    
			    
			    <!-- Swiper  Movil-->
			    <div id="movil" class="visible-xs visible-sm">
			    	<div class="swiper-container">
				        <div class="swiper-wrapper">
				        	<?php
				        	
				        	 foreach($videos as $imagen){
								 $cuadros = $imagen['video'];
								$cuadro=explode("v=", $cuadros);
								
								$idvideo = $cuadro[1];	
								
								?>
								<div class="swiper-slide">
									<div class="destacarimg" data-titulo="<?php echo $imagen['titulo'] ?>" data-descripcion="<?php echo $imagen['descripcion'] ?>" data-url="https://www.youtube.com/embed/<?php echo $idvideo ?>?rel=0"  data-enlace="<?php echo $imagen['imagen-video']?>">
										<!--<img src="http://img.youtube.com/vi/<?php echo $idvideo ?>/maxresdefault.jpg" class="img-responsive">-->
										<img style="height: 100px; width: 100%;" src="<?php echo $imagen['imagen-video'] ?>" class="img-responsive">
									</div>
								</div>
								<?php	
								
				        	}
							
							 ?>
				            
				        </div>
				        <!-- Add Arrows -->
				        <div class="swiper-button-next"></div>
				        <div class="swiper-button-prev"></div>
			    	</div>
			    	
			    </div>
				
				<?php	 
				 			
				endwhile;
				?>
				
			</div>
		</div>
		<div style="height: 50px;"></div>
		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-9">	
				<div class="row"> 					
						
							
							<?php
								$rss=file_get_contents('http://ommayau.com/blog/category/master-value-investing-y-teoria-del-ciclo/feed/');
								//$rss=str_replace(':encoded', '', $rss);
								$xml=simplexml_load_string($rss,'SimpleXMLElement', LIBXML_NOCDATA);
								$items=$xml->channel->item; 
								
								?>
								<?php
								$contfeed = 0;
								$contnoticia = 0;
								foreach($items as $item){
									$contnoticia ++;
									//extractThumbnail
									$c = $item->children('http://purl.org/rss/1.0/modules/content/');
									$contenido = $c->encoded;	
									$imagen = $item->image;	
									//print_r($contenido);
									/*$dom = new DOMDocument();
									if($dom){
										$dom->loadHTML($contenido);
										if($dom->getElementsByTagName('img')->item(0)->getAttribute('src')){
											$imagen= $dom->getElementsByTagName('img')->item(0)->getAttribute('src');
										}
									}
									unset($dom);*/
													
							if($contnoticia <=3){
								if($contfeed == 0){
								?>
								
									<div class="col-sm-6">
										<img style="margin: 0 auto;" src="<?php echo $imagen ?>" class="img-responsive">
										<h1 class="title-blog"><?php echo $item->title ?></h1>
										<p class="contenido-blog"><?php echo substr($item->description,0,102); ?> ...</p>
										<div class="text-center"><img style="margin:0 auto;" class="imgblog" src="<?php echo IMAGES?>/READ.png"><a class="link-rss" href="<?php echo $item->link ?>" target="_blank">&nbsp&nbsp&nbsp&nbsp&nbsp Leer más  </a></div>
										<?php
										
										?>
										<br/>
									</div>
								
								<?php
							}else{
								?>
								
									<div style="margin-bottom: 20px;" class="col-sm-6">
										<div class="row">
											<div class="col-sm-6">
												<img style="margin: 0 auto;" src="<?php echo $imagen ?>" class="img-responsive">
											</div>
											<div class="col-sm-6">
												<p class="title-blog"><?php echo $item->title; ?></p>
												<p class="contenido-blog"><?php echo substr($item->description,0,105); ?> ...</p>
												<div class="text-center"><img style="margin:0 auto;" class="imgblog" src="<?php echo IMAGES?>/READ.png"><a class="link-rss" href="<?php echo $item->link ?>" target="_blank">&nbsp&nbsp&nbsp&nbsp&nbsp Leer más  </a></div>
											</div>
										</div>
										
									</div>
									
								
								<?php
							}
							$contfeed++;
							}
						}

						?>					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-9">
				<h1 class="title-medios">Eventos</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-9">
				<div class="row">
					<div class="col-sm-12">
					 <div id="myCarousel-eventos" class="carousel slide noticia"  data-ride="carousel" style="background: transparent;">
						 <div class="carousel-inner">
						  <?php 
							date_default_timezone_set('America/Guatemala');
							setlocale(LC_ALL,"es_ES");
							
						   $the_query = new WP_Query(array(
						    'post_type' => 'eventos', 
						    'posts_per_page' => 1,
						    'order' => 'ASC'
						    )); 
						   while ( $the_query->have_posts() ) : 
						   $the_query->the_post();
							   
							$eventos = rwmb_meta( 'eventos-mes' );
						  ?>
						   <div class="item active">
						    <?php 
						    $post_thumbnail_id = get_post_thumbnail_id();
								$imgurl=wp_get_attachment_url( $post_thumbnail_id );
							?>
							<div class="row">
								<div class="col-sm-6">
								<?php
									foreach($eventos as $evento){
										
										$originalDate = strtotime($evento['fecha-evento']) ;
										
										?>
										<div class="col-sm-12">
											<div class="evento box-shadow">
												<div class="fecha"><?php echo strftime("%d %B %Y",$originalDate) ?> <span class="pull-right"><i style="color:#666666 !important;" class="fa fa-calendar" aria-hidden="true"></i></span></div>
												<p><?php echo $evento['titulo-evento']?></p>
												<p>------------------------</p>
												<p>HORA Y LUGAR: <?php echo $evento['hora-evento'].' '.$evento['lugar-evento']?></p>	
												<?php
													if(!$evento['link-evento'] == ''){
														?>
														<div class="evento-link"><a href="<?php echo $evento['link-evento'] ?>" target="_blank"   class="btn btn-contactenos">Apúntate</a></div>
														<?php
													}else{
														
													} 
												?>				
											</div>				
										</div>				
										<?php
									} 
								?>
								
								</div>
								<div class="col-sm-6">
									
									<div class="mes"><?php the_title() ?> <a class="" href="#myCarousel-eventos" role="button" data-slide="next"><i style="font-size:2em; color:#900C3F; margin-left: 50px;" class="fa fa-angle-right" aria-hidden="true"></i></a></div>
									<div class="thumb-img"><img src="<?php echo $imgurl ?>" class="img-responsive"></div>
								</div>
							</div>
						   </div><!-- item active -->
						  <?php 
						   endwhile; 
						   wp_reset_postdata();
						  ?>
						
						  <?php 
						  
						   $the_query = new WP_Query(array(
						    'post_type' => 'eventos',
						    'posts_per_page' => 5, 
						    'offset' => 1, 
						    'order' => 'ASC'
						    )); 
						   while ( $the_query->have_posts() ) : 
						   $the_query->the_post();
							   
							$eventos = rwmb_meta( 'eventos-mes' );
						  ?>
						   <div class="item">
						    <?php
						   $post_thumbnail_id = get_post_thumbnail_id();
								$imgurl=wp_get_attachment_url( $post_thumbnail_id );
							?>
							<div class="row">
								<div class="col-sm-6">
								<?php
									foreach($eventos as $evento){
										$originalDate = strtotime($evento['fecha-evento']) ;
										?>
										<div class="col-sm-12">
											<div class="evento box-shadow">
												<div class="fecha"><?php echo strftime("%d %B %Y",$originalDate) ?> <span class="pull-right"><i style="color:#666666 !important;" class="fa fa-calendar" aria-hidden="true"></i></span></div>
												<p><?php echo $evento['titulo-evento']?></p>
												<p>------------------------</p>
												<p>HORA Y LUGAR: <?php echo $evento['hora-evento'].' '.$evento['lugar-evento']?></p>		
												<?php
													if(!$evento['link-evento'] == ''){
														?>
														<div class="evento-link"><a href="<?php echo $evento['link-evento'] ?>" target="_blank"  class="btn btn-contactenos">Apúntate</a></div>
														<?php
													}else{
														
													} 
												?>			
											</div>				
										</div>				
										<?php
									} 
								?>
								</div>
								<div class="col-sm-6">
									<div class="mes"><?php the_title() ?> <a class="" href="#myCarousel-eventos" role="button" data-slide="next"><i style="font-size:2em; color:#900C3F; margin-left: 50px;" class="fa fa-angle-right" aria-hidden="true"></i></a></div>
									<div class="thumb-img"><img src="<?php echo $imgurl ?>" class="img-responsive"></div>
								</div>
							</div>
						   </div><!-- item -->
						   
						  <?php 
						   endwhile; 
						   wp_reset_postdata();
						  ?>
						 </div><!-- carousel-inner -->
						 <!-- <a class="left carousel-control" href="#myCarousel-eventos" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel-eventos" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>-->
						</div><!-- #myCarousel -->	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>