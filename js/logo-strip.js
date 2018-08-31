( function( $ ) {

	$('div.customer-quote').first().removeClass('hidden');
	$('div.customer-quote').first().animate({'opacity' : '1'}, 500);
	$('div.logo').first().addClass('selected-logo');

	$('div.logo').click(function() {
		var previously_selected = $('div.selected-logo');
		var newly_selected = $(this);
		var number_of_previous_selection = $('div.logo').index(previously_selected);
		var number_of_new_selection = $('div.logo').index(newly_selected);
		var selection_distance = number_of_previous_selection - number_of_new_selection;
	
		$('div.logo').removeClass('selected-logo');
		$(this).addClass('selected-logo');
		
		var logo_offset = $(this).offset().left - $('div.logo').first().offset().left;
		var negative_offset = logo_offset * -1;
		var strip_offset = $('div.logo-strip').offset().left - $('div.logo').first().offset().left;
		
		var to_be_cloned = $('div.logo').slice(number_of_previous_selection, number_of_new_selection).clone(true);
		$('div.logo-strip').append(to_be_cloned);
		$('div.logo').css({'transform' : 'translateX(' + negative_offset + 'px)'});
		
		console.log(number_of_new_selection);
		console.log(number_of_previous_selection);
		console.log(negative_offset);
		
		var logo_id = $(this).attr('id');
		var logo_id_trimmed = logo_id.substr(5);
		
		$('div.customer-quote').addClass('hidden');
		$('div.customer-quote').css({'opacity' : '0'});
		$('div#quote-' + logo_id_trimmed).removeClass('hidden');
		$('div#quote-' + logo_id_trimmed).animate({'opacity' : '1'}, 500);
		

	});

	} )( jQuery );