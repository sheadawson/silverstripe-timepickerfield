(function($) {

	$('input.timepicker').timepicker({

	});

	$.fn.extend({
		ssTimepicker: function(opts) {
			return $(this).each(function() {
				if($(this).hasClass('timepicker-applied')) return; // already applied
				
				$(this).addClass('timepicker-applied').timepicker(opts);
			});
		}
	});

	$('.field.time input.text').live('click', function() {
		$(this).ssTimepicker();
		$(this)._showTimepicker;
	});

}(jQuery));