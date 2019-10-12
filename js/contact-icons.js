( function( $ ) {

	var phone_number = contact_info.phone;
	var email_address = contact_info.email;

	$('div.lx-contact-icons').html('<a href="tel:' + phone_number +
	'"><i class="icon-phone"></i></a><p class="divider"></p>' +
	'<a data-rel=”lightbox” class="fancybox-inline" href="#contact-form" ><i class="icon-email"></i></a>')

	} )( jQuery );
