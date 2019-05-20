jQuery(document).ready(function($) {
	
	// spam fix
	jQuery('#enviar').on('click', function(){
		jQuery('input[name="token"]').val('ea847988ba59727dbf4e34ee75726dc3');
	});
	
	$( "#nav-movil li a" ).on( "click", function() {
  		$( ".toggle" ).trigger( "click" );
	});
	
	 $('#nav li a').on('click',function(e){
	 	e.preventDefault();
		var link = $(this).attr('href');
		$(link).ScrollTo({
			duration: 1000
		});
	 });
	 
	  $('#nav-movil li a').on('click',function(){
		var link = $(this).attr('href');
		$(link).ScrollTo({
			duration: 1000
		});
	 });
	 
	  $('#nav-scroll li a').on('click',function(){
		var link = $(this).attr('href');
		$(link).ScrollTo({
			duration: 1000
		});
	 });
		
     
	jQuery('#bajar').on('click',function(){
		jQuery('#informacion').ScrollTo('slow');
	 });
	 
	 jQuery('#logo,#logof').on('click',function(){
		jQuery('#slider').ScrollTo('slow');
	 });
      
    jQuery('.destacarimg').on('click',function(){
		var enlace = jQuery(this).data('enlace');
		var url = jQuery(this).data('url');
		var titulo = jQuery(this).data('titulo');
		var descripcion = jQuery(this).data('descripcion');
		jQuery('#destacadaimg').attr('src',enlace);
		jQuery('#destacadavideo').attr('src',url);
		jQuery('.titulo').html(titulo);
		jQuery('.descripcion').html(descripcion);
		jQuery('#vervideomedio').css('display','none');
		
	});
		
	 jQuery('#myModal').on('show.bs.modal',function(){
		jQuery('.contactanos').hide();
	});
	
	
	jQuery('#myModal').on('hidden.bs.modal', function (e) {
	  jQuery('.contactanos').show();
	})
		
       var win = $(window);
        $(document).ready(function () {
            var container = $("#container");
            var sudoSlider = $("#slider").sudoSlider({
                effect: "fade",
                responsive: true,
                prevNext: false,
                continuous: true,
                autoHeight: false,
                touch: true,
                customLink: ".sudoSliderLink",
                updateBefore: true,
                auto:true,
                pause: 6000

            });

            win.on("resize blur focus", function () {
                var height = win.height();
                sudoSlider.height(height);
                container.height(height);
            }).resize();


            sudoSlider.find(".slide").each(function () {
                var slide = $(this);
                var imageSrc = slide.attr("data-background");
                if (!imageSrc) {
                    return;
                }
                $("<img />").attr("src", imageSrc).properload(function () {
                    var backgroundImage = $(this);
                    var imageHeight = backgroundImage[0].naturalHeight;
                    var imageWidth = backgroundImage[0].naturalWidth;

                    if (!imageHeight) {
                        var img = new Image();
                        img.src = imageSrc;
                        imageWidth = img.width;
                        imageHeight = img.height;

                    }

                    var aspectRatio = imageWidth / imageHeight;

                    backgroundImage.appendTo(slide);

                    slide.css({
                        zIndex: 0
                    });

                    backgroundImage.css({
                        position: "absolute",
                        zIndex: -1,
                        top: 0,
                        left: 0
                    });

                    win.on("resize blur focus", function () {
                        var sliderWidth = sudoSlider.width();
                        var sliderHeight = sudoSlider.height();
                        if ((sliderWidth / sliderHeight) < aspectRatio ) {
                            var leftMargin = ((sliderWidth - (sliderHeight * aspectRatio)) / 2) + "px";
                            backgroundImage.css({
                                top: 0,
                                left: leftMargin,
                                width: sliderHeight * aspectRatio,
                                height: sliderHeight
                            });
                        } else {
                            backgroundImage.css({
                                left: 0,
                                top: ((sliderHeight - (sliderWidth / aspectRatio)) / 2) + "px",
                                height: sliderWidth / aspectRatio,
                                width: sliderWidth
                            });
                        }
                    }).resize();

                }, true);
            });
        });
        
        
        var nav           = $('nav');
		var menu          = $('.menu');
		var menuContainer = $('.menu-container');
		var subMenu       = $('.submenu');
		var toggle        = $('.toggle');
		var subToggle     = $('.has-children span');
		var back          = '<div class="hide-submenu"></div>';
		var subHide       = $(back);
		
		// Toggle menu
		toggle.on("click", function() {
		  nav.toggleClass('is-visible');
		  if(menu.hasClass('visually-hidden')) {
		    menu.toggleClass('visually-hidden is-visible')
		  } else {
		    menu.removeClass('is-visible');
		    // Wait for CSS animation
		    setTimeout(function() {
		      nav.removeClass('view-submenu');
		      menu.addClass('visually-hidden');
		    }, 200);
		  }
		});
		
		// Add submenu hide bar
		subHide.prependTo(subMenu);
		var subHideToggle = $('.hide-submenu');
		
		// Show submenu
		subToggle.on("click", function() {
		  nav.addClass('view-submenu');
		  // Hide all the submenus...
		  subMenu.hide();
		  // ...except for the one being called
		  $(this).parents('li').find('.submenu').show();
		});
		
		// Hide submenu
		subHideToggle.on("click", function() {
		  nav.removeClass('view-submenu');
		});
		
		
	
});