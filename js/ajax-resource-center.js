(function($) {
	$('li.resource-category').click( function() {
		var clicked_slug = $(this).attr('id');
		$('span.rc-select-label').attr('id', clicked_slug);
		resource_center_search();
	});
	
	$('div.logix-speech button').click( function() {
		resource_center_search();
	});
	
	$('form#rc-search-form').keypress(function(event) {
		if ( event.which == 13 ) {
     event.preventDefault();
	 $('div.logix-speech button').click();
  }
		
	});
	
	function resource_center_search() {
		
		
		var cat_slug_id = $('span.rc-select-label').attr('id'); 
		var s_keyword = $('input#s').val();
		
		$.ajax({
		url: ajaxrc.ajaxurl,
		type: 'post',
		data: {
			action: 'rc_loop',
			query_vars: ajaxrc.query_vars,
			cat_slug: cat_slug_id,
			keyword: s_keyword
		},
		
		beforeSend: function() {
			$('div.resource').remove();
			$(document).scrollTop();
			$('div.resource-center-list').append( '<div class="loader">Loading Resources...</div>' );
		},
		
		success: function( html ) {
				$('div.resource-center-list div.loader').remove();
				$('div.resource-center-list').append( html );
				
			}
		});
		
	}
	
	
	
})(jQuery);