/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;



jQuery(document).ready(function($) {

	
    
	/*
	    
	    Prevent links with # href doing anything.
	    
	*/
	$('a[href="#"]').click( function(e) {
		e.preventDefault();
	});
	
	
	
	/*
	    
	    Any video within .content will be fitvidded.
	    https://github.com/davatron5000/FitVids.js
	    
	*/
	$("body").fitVids();
	
	
	
	/*
	
		Sitewide to set an image as a background. Styling for this
		can be found in modules/images.scss
	
	*/
	$('.bg-image').each(function() {
		var url = $(this).find('.bg-image--src').attr('src');
		$(this).css('background-image', 'url("'+ url +'")');
	});
	
	
	
	//
	
	
	

});



jQuery( window ).resize(function() {
	
	
	
	//
	
	
	
});