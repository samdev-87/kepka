(function ($) {
"use strict";


/* meanmenu */
 $('#mob-menu').meanmenu({
	 meanMenuContainer: '.mobile-menu',
	 meanScreenWidth: "991"
 });	



/* slider-active */
$('.sliders-active').owlCarousel({
    loop:true,
    nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	dots:true,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

/* product-active */
$('.product-active').owlCarousel({
    loop:true,
    nav:true,
    margin: 30,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        767:{
            items:3
        },
        1000:{
            items:4
        },
        1200:{
            items:5
        }
    }
})

/* product-active */
$('.trendy-product-active').owlCarousel({
    loop:true,
    nav:true,
    margin: 30,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        767:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

 /* tooltip */
$(function () {
    $("[rel='tooltip']").tooltip();
});
 
/* blog-active */
$('.blog-active').owlCarousel({
    loop:true,
    nav:true,
    margin: 30,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
/* brand-active */
$('.brand-active').owlCarousel({
    loop:true,
    nav:true,
    margin: 30,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:3
        },
        767:{
            items:4
        },
        1000:{
            items:5
        }
    }
})

/* Scroll Up */
$.scrollUp({
	easingType: 'linear',
	scrollSpeed: 900,
	animation: 'fade',
	scrollText: '<i class="fa fa-angle-up"></i>',
});	


/* brand-active */
$('.product-img-active').owlCarousel({
    loop:true,
    nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:2
        },
        767:{
            items:3
        },
        1000:{
            items:4
        }
    }
})



/* details-tab */ 
$('.details-tab').owlCarousel({
	loop:true,
	margin:10,
	nav:true,
	navText:['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
	responsive:{
		0:{
			items:3
		},
		450:{
			items:3
		},
		767:{
			items:3
		},
		1000:{
			items:4
		}
	}
})	

$('.video-popup').magnificPopup({
  type: 'iframe'
});


/* team-active */
$('.team-active').owlCarousel({
	loop:true,
	nav:false,
	responsive:{
		 0:{
            items:1
        },
        767:{
            items:3
        },
        1000:{
            items:4
		}
	}
})	


/* counter */
$('.counter').counterUp({
    delay: 10,
    time: 1000
});

/* showlogin toggle function */
 $( '#showlogin' ).on('click', function() {
	$( '#checkout-login' ).slideToggle(900);
 }); 
	
/* showcoupon toggle function */
 $( '#showcoupon' ).on('click', function() {
	$( '#checkout_coupon' ).slideToggle(900);
 });
	 
/* Create an account toggle function */
 $( '#cbox' ).on('click', function() {
	$( '#cbox_info' ).slideToggle(900);
 });
	 
/* Create an account toggle function */
 $( '#ship-box' ).on('click', function() {
	$( '#ship-box-info' ).slideToggle(1000);
 });

/* countdown */
	$('[data-countdown]').each(function() {
	  var $this = $(this), finalDate = $(this).data('countdown');
	  $this.countdown(finalDate, function(event) {
		$this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span class="time-count">%S</span> <p>Sec</p></span>'));
	  });
	});	 
 
 /* image-link */
$('.image-link,.popup-link').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});


/* slider-range */ 
$( "#slider-range" ).slider({
	range: true,
	min: 0,
	max: 500,
	values: [ 75, 300 ],
	slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	}
});
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
" - $" + $( "#slider-range" ).slider( "values", 1 ) );
    
/*--
	Isotop with ImagesLoaded
-----------------------------------*/
var isotopFilter = $('.isotope-filter');
var isotopGrid = $('.isotope-grid');
var isotopGridItem = '.isotope-item';
    
isotopFilter.find('button:first-child').addClass('active');
    
/*-- Images Loaded --*/
isotopGrid.imagesLoaded(function () {
    
    var $grid = isotopGrid.isotope({
        itemSelector: isotopGridItem,
        layoutMode: 'masonry',
    });
    
    /*-- Isotop Filter Menu --*/
    isotopFilter.on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        isotopFilter.find('button').removeClass('active');
        $(this).addClass('active');
        // use filterFn if matches value
        $grid.isotope({filter: filterValue});
    });
    
});
/*--
	owl carousel nav
-----------------------------------*/
    $('.details-tab a').on('click', function () {
        $('.details-tab a').removeClass('active');
    })


})(jQuery);	