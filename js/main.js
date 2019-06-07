$(document).ready(function(){
	$('.slider').slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed: 1000,
		dots: true,
		slidesToShow: 3,
		centerPadding: '10px',
		responsive: [
    {
      breakpoint: 970,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 805,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 1
      }
    }
  ]
	});
	$('.show_popup').click(function(){
	var popup_id = $('#' + $(this).attr("rel"));
	$(popup_id).show();
	$('.overlay_popup').show();
	})
	$('.overlay_popup').click(function(){
		$('.overlay_popup, .popup').hide();
	})
     $('.js-close-campaign').click(function(){
    	$('.overlay_popup, .popup').hide();
    })
     $('#telephone').mask('+7(999)-999-99-99');
     $('#tele-phone').mask('+7(999)-999-99-99');
     $('#telephone-phone').mask('+7(999)-999-99-99');
});
    
