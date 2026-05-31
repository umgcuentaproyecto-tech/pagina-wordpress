;(function($) {
'use strict'
// Dom Ready
	$(function() {
		
    	var grid = document.querySelector('#masonry-grid');
        if (grid) {
            new Masonry(grid, {
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });
        }

        $(window).resize(function() {
        var logoHeight = $('.logo-container').outerHeight();
            $('#static_header_banner .content-text').css('padding-top', logoHeight + 'px');
        }).trigger('resize'); // trigger resize on load
		
        if ($('#static_header_banner .content-text').length) {
            $('#static_header_banner .content-text').css(
                'padding-top',
                $('.logo-container').outerHeight() + 50
            );
        }
	});
})(jQuery);