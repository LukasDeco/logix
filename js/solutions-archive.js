( function( $ ) {
	
		$('img.wp-post-image').hide();
		$('img.wp-post-image').first().show();
	
		$('li.solution-archive-item').hover(function() {
			$('img.wp-post-image').hide();
			var solution_id = $(this).attr('id');
			var solution_id_dash_pos = solution_id.split("-", 2).join("-").length;
			var solution_id_trimmed = solution_id.substring(solution_id_dash_pos + 1);
			
			$('img.solution-' + solution_id_trimmed + '-image').show();
			
		});
		
		} )( jQuery );