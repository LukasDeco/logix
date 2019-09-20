( function( $ ) {


	$('div.kb-icons div.kb-icon').first().addClass('selected-kb');

	$('div.title-and-contact div.benefit-title').first().removeClass('hidden');
	$('div.title-and-contact div.benefit-title').first().css({'opacity' : '1'});

	$('div.kb-paragraph-single').first().removeClass('hidden');
	$('div.kb-paragraph-single').first().css({'opacity' : '1'});

	$('div.kb-third-level div.testimonial').first().removeClass('hidden');
	$('div.kb-third-level div.testimonial').first().css({'opacity' : '1'});

	$('div.kb-icon').click(function() {
		$('div.kb-icon').removeClass('selected-kb');
		$(this).addClass('selected-kb');

		var kb_id = $(this).attr('id');
		var kb_id_trim = kb_id.substr(13);


		$('.kb-second-level div.benefit-title').addClass('hidden');
		$('.kb-second-level div.benefit-title').css({'opacity' : '0'});

		$('div.kb-paragraph-single').addClass('hidden');
		$('div.kb-paragraph-single').css({'opacity' : '0'});

		$('.kb-third-level div.testimonial').addClass('hidden');
		$('.kb-third-level div.testimonial').css({'opacity' : '0'});

		$('div#benefit-title-' + kb_id_trim).removeClass('hidden');
		$('div#benefit-title-' + kb_id_trim).css({'opacity' : '1'});

		$('div#benefit-paragraph-' + kb_id_trim).removeClass('hidden');
		$('div#benefit-paragraph-' + kb_id_trim).css({'opacity' : '1'});

		$('div#benefit-testimonial-' + kb_id_trim).removeClass('hidden');
		$('div#benefit-testimonial-' + kb_id_trim).css({'opacity' : '1'});
	});

	} )( jQuery );
