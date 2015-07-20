/**
 * Theme : Argo 
 * Author: WPStrong
 * Url: http://themeforest.net/user/wpstrong
 * Version: 1.0
 */
var trigged=[],scrollTimeout;
jQuery(function($){
	
	$('#about-us .bar').attr('style','')
	//Trigger rotate
	// --------------------
	var rotateCycle = setInterval(function(){
		var thumbs = $('#header .thumb:not(.active)');
		var thumb_act = $('#header .active');
		if($('html').hasClass('csstransforms3d')){
				$(thumbs[getRandomInt(0,thumbs.length)]).addClass('active');
				$(thumb_act[getRandomInt(0,thumb_act.length)]).removeClass('active');
			}
		else{
		 	thumbs = $('#header .thumb:not(.active1)');
			thumb_act = $('#header .active1');
				
			$(thumbs[getRandomInt(0,thumbs.length)]).addClass('active1').find('img:first').animate({height:'toggle'});
			$(thumb_act[getRandomInt(0,thumb_act.length)]).removeClass('active1').find('img:first').animate({height:'toggle'});
		}

	},3000);

	function triggerEvent(elem,fn,offset){
		if(!elem.offset()) return;
		var top = elem.offset().top;
		if((top-offset)<$(window).scrollTop()){
			fn(elem);
		}
	}

	//Window on scroll event
	//-------------------------------
	$(window).scroll(function(){
		var wtop = $(window).scrollTop();
		var header_heigh = $('#header').height();
		if(wtop<header_heigh){ 
			$('#navbar').removeClass('navbar-fixed-top');
			$('#header').css('margin-bottom',0);
		}
		clearTimeout(scrollTimeout);
			scrollTimeout=setTimeout(function(){
				
				triggerEvent($('.portfolio:first'),function(){
					if(trigged['portfolio']) return;
					$('.isotope .item').addClass('active');
					trigged['portfolio'] = true;
				},400);

				triggerEvent($('#about-us'),function(){
					if(trigged['about-us']) return;
					$('.progress .bar').each(function(){
						var $this=$(this);	
						$this.css('width',$this.data('width')+'%');			
					});
					trigged['about-us'] = true;
				},200);

			},50);
				
			triggerEvent($('#navbar'),function(elem){
				if(elem.hasClass('navbar-fixed-top')) return;
				 elem.addClass('navbar-fixed-top');
				 $('#header').css('margin-bottom',$('#navbar').height());
				},0)
	});

	//Window on resize event
	//------------------------------------------------
	$(window).resize(function(){
		var metro = $('#header .container.visible-phone:visible');
		var bricks = metro.find('.brick1');
		var size = metro.width()/2
		bricks.css({width:size,height:size});
		ser_equal_height();
	

	});

	$(window).trigger('resize');

	//Vertical scroll for blog section
	//------------------------------------------
	$(".blog_container").mCustomScrollbar({
		horizontalScroll:true,
		advanced:{
			autoExpandHorizontalScroll:true
		}
	});

	
	// Nav button click 
	// -------------------------------------------------------

	$('#navbar .nav2 a:not(.external) , #header a.nav-item:not(.external) , #navbar .brand:not(.external),#btn_up').click(function(e){
		
		e.preventDefault();
		var des = '#'+$(this).attr('href').split('#')[1];
		if($('.navbar .nav-collapse').hasClass('in')){
			$('.navbar .btn-navbar').trigger('click');
		}
		goToSectionID(des);
	})

	/**
	 * Isotope filter
	 */
		// cache container
		var $container = $('.isotope');
		// initialize isotope
		$container.isotope({
		  // options...
		});

		// filter items when filter link is clicked
		$('.filter a').click(function(){
		  var selector = $(this).attr('data-filter');
		  $container.isotope({ filter: selector });
		  $('.filter a.active').removeClass('active');
		  $(this).addClass('active');
		  return false;
		});

	/**
	 * Portfolio hover effect 
	 */
		$('#modalbox').on('show',function(){
			$('.modal-backdrop:first').fadeOut(function(){$(this).remove();})
			$('.rotate_container').fadeOut();
			$(this).css({position:'absolute',top:$(window).scrollTop()})
		})
		.on('hidden',function(){
			$(this).find('.modal-body').html('');
		});
		$(' .isotope > li ').each( function() { 
			var $this = $(this);
			$(this).hoverdir({
				hoverDelay : 0
			}); 
			$this.find('a').on('click',function(e){
				e.preventDefault();
				$('body').append('<div class="modal-backdrop fade in"></div>');
				$('.rotate_container').show();
				$.get($(this).attr('href'),function(resutl){
					$('#modalbox .modal-body').html(resutl);
					$('#modalbox').modal('show');
				})
				
			});
		} );

	/**
	 * Init carousel
	 */
		$('.testimonial').carousel({interval:5000});

	/**
	 * Swich to slide effect
	 */
	
	if (jQuery.browser.msie || !$('html').hasClass('csstransforms3d')) {  
   		$("html").addClass("ie").removeClass('csstransforms3d');  
   	}	 
	
	

})

function ser_equal_height(){

	//Equal height
	//---------------------------------------------------------
	var qHeight = 0;
	jQuery('.sev_list').each(function(){
		if(qHeight < jQuery(this).height()) qHeight = jQuery(this).height()
	})

	jQuery('.sev_list').each(function(){
		//var height = jQuery(this).closest('.entry-content').height()-30;
		jQuery(this).height(qHeight);
	})

	jQuery('[data-spy="scroll"]').each(function () {
    var $spy = jQuery(this).scrollspy('refresh')
    });
}

jQuery(window).load(function($){

	// Trigger window scroll event when page loaded
	// -------------------------------------------------------
	jQuery(window).trigger('scroll');
	ser_equal_height();
	

})

//Custom functions 

/**
 * Returns a random integer between min and max
 * Using Math.round() will give you a non-uniform distribution!
 */
function getRandomInt (min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

/**
 * Scroll to section
 * @param  string des HTML identity of section block
 * @return void
 */
onanimate = false;
function goToSectionID(des){
	onanimate = true;
	var pos = (jQuery(des).length>0 )?jQuery(des).offset().top:0;

	jQuery('html,body').animate({scrollTop:pos},1000,function(){
		if(history.pushState){
			history.pushState(null,null,des);
		}else		window.location.hash = des;
		jQuery(window).scrollTop(pos);
		onanimate=false
	});
}