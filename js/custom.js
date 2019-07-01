$(function () {
    'use strict';

    // Swith Between Login/Signup From Login Page
    $('.contact_ask_us span').click(function () {
        $(this).addClass('selected').siblings().removeClass('selected');
        $('.' + $(this).data('class')).show(500).siblings().hide(500);
    })

	// start Same Height Section
	var maxSameHeight = 0; 
	$('.services-page .col-md-6 .service').each(function () {
		if ($(this).height() > maxSameHeight) {
			maxSameHeight = $(this).height();
		}
	});
	$('.services-page .col-md-6 .service').height(maxSameHeight);

    // start Same Height Section
	var maxSameHeight = 0; 
	$('.services-page .col-md-4 .service').each(function () {
		if ($(this).height() > maxSameHeight) {
			maxSameHeight = $(this).height();
		}
	});
	$('.services-page .col-md-4 .service').height(maxSameHeight);

});