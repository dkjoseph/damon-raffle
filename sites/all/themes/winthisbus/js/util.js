
var Drupal = Drupal || {};

(function($, Drupal){
  "use strict";

  Drupal.behaviors.bootstrap_subtheme = {
    attach: function() {
	
	var _swiper = $('.swiper-container').swiper({
	    mode: 'horizontal',
	    loop: true
	});
	
    }
  };





})(jQuery, Drupal);
