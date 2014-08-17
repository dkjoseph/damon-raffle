
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
	
	// Customer information form
	var $hearabout = $('#edit-customer-profile-shipping-field-other');
	var $other = $('.field-name-field-other');
	
	$hearabout.change(function(){
//	   var _sel = $(this).find('option:selected');
	   var _valSel = this.value == ('16');
	   
	   if (_valSel == true){
	       $other.fadeIn();
	   } else {
	      $other.fadeOut();
	   }
	});
	
    }
  };





})(jQuery, Drupal);
