jQuery(document).ready(function($){

	 $('.carousel .thumb').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: false,
    itemWidth: 120,
    itemMargin: 5,
    asNavFor: '.carousel .preview'
  });
 
  $('.carousel .preview').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: false,
		directionNav: false,
    sync: ".carousel .thumb"
  });	
	
	$('.banner').flexslider({		
    animation: "slide",		
		directionNav: false
  });
	
	$('.thumbnails a.img-thumb').popover({
		animation: false
	});
	$('.thumbnails a.img-thumb').on('click', function (e) {
    $('.thumbnails a.img-thumb').not(this).popover('hide');
	});
	$('.thumbnails li').delegate('a.close-btn','click', function (e) {
    $(this).closest('.popover').prev().popover('hide');
	});
	
});