( function( $ ) {
	
	$('div.resource-select').click( function(event){
		 event.stopPropagation();
		$(this).toggleClass('active');
	});
	
	$('li.resource-category').click(function() {
		var name = $(this).html();
		$('span.rc-select-label').html(name);
	});
	
	$(window).click(function() {
		$('div.resource-select').removeClass('active');
	});

} )( jQuery );