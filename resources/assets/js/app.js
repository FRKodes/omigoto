$(function() {

    $('.dishes-menu a').on('click', function () {
    	var current_item = $(this).attr('data-identifier');
    	$('.dishes-menu a').removeClass('active');
    	$(this).addClass('active');
    	$('.slider-container').addClass('hidden');
		$('.' + current_item).removeClass('hidden');

    	console.log(current_item);
    })

	$('.slider-container').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  prevArrow: '<button type="button" class="slick-prev icon-left-arrow"></button>',
	  nextArrow: '<button type="button" class="slick-next icon-right-arrow"></button>',
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
	  ]
	});
	
	
	setTimeout(
		function() {
			$('a.icon-nigiri').click();
		},
	500);
	
});