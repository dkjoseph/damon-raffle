
var Drupal = Drupal || {};

(function($, Drupal){
  "use strict";

  Drupal.behaviors.bootstrap_subtheme = {
    attach: function() {
	// Swiper
	var _swiper = $('.swiper-container').swiper({
	    mode: 'horizontal',
	    loop: true
	});
	
	// Magnific
	$('.zoom').magnificPopup({ 
	    type: 'image',
	    gallery: {enabled:true}
	});
    }
  };





})(jQuery, Drupal);
