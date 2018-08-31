( function( $ ) {
	
	if ( ! Modernizr.objectfit ) {
	  $('div.logo').each(function () {
		var $container = $(this),
			imgUrl = $container.find('img').prop('src');
		if (imgUrl) {
		 $container
        .css('backgroundImage', 'url(' + imgUrl + ')')
        .addClass('compat-object-fit');
    }  
	  });
	  
	  $('div.solution-image img').each(function () {
		var $img = $(this);
		var height = $img.attr('height');
		$img.css('height' , height);
      
	  });
	  
	}
	} )( jQuery );