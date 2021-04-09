jQuery(document).ready(function($) {
                //owl carousel
	$("#owl-demo").owlCarousel({

		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		autoplay:true,
		autoplayTimeout:3000,
		dots: false,
		loop: true,
		animateOut: 'fadeOut',
		//singleItem:true

		// "singleItem:true" is a shortcut for:
		items : 1, 
		// itemsDesktop : false,
		// itemsDesktopSmall : false,
		// itemsTablet: false,
		// itemsMobile : false

	});
    $('#owl-demo2').owlCarousel({
	    margin:20,
	    nav:true,
		autoplay:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        480:{
	            items:2
	        },
	        700:{
	            items:4
	        },
	        1000:{
	            items:3
	        },
	        1100:{
	            items:5
	        }
	    }
	})
	$('#owl-items').owlCarousel({
	   	navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		autoplay:false,
		autoplayTimeout:3000,
		dots: false,
		loop: false,
		nav: true, 
		rewind: true,
		margin: 10,
		navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		//singleItem:true

		// "singleItem:true" is a shortcut for:
		items : 4, 
		// itemsDesktop : false,
		// itemsDesktopSmall : false,
		// itemsTablet: false,
		// itemsMobile : false
	})
});