(function($) {

	$.fn.extend({
		ssTimepicker: function(opts) {
			return $(this).each(function() {
				if($(this).hasClass('timepicker-applied')) return; // already applied
				$(this).addClass('timepicker-applied').timepicker(opts);
				$(this).blur().focus(); // trigger show
			});
		}
	});

	$('.field.time input.text').live('click', function() {
		$(this).ssTimepicker();
	});

}(jQuery));