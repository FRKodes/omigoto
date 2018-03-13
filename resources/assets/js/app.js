$(function() {
    console.log( "ready!" );

    $('.dishes-menu a').on('click', function () {
    	console.log('ok!');
    })

	$('.nigiri-container').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: true
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});
	
	
});


