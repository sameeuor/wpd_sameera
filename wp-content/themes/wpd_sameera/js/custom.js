(function($) {
  "use strict";
  $(document).ready(function(){ 
$('.mobile-menu-toggle').on('click', function(){
 $('body').toggleClass('show-menu');
});	  
$('.slider').bxSlider({
			mode: 'fade',
			speed: 1000,
            auto: true,
            autoControls: false,
            stopAutoOnClick: true,
			controls: false,
            pager: true,	
        });
  });
  })(jQuery);