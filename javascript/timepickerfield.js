(function($) {

	$.fn.extend({
		ssTimepicker: function(opts) {
			return $(this).each(function() {
				var config = $.extend(opts || {}, $(this).data(), $(this).data('jqueryuiconfig'), {});
				if($(this).hasClass('timepicker-applied')) return; // already applied
				$(this).addClass('timepicker-applied').timepicker(config);
				$(this).blur().focus(); // trigger show
			});
		}
	});

	$(document).on('click', 'input.time', function() {
		$(this).ssTimepicker();
	});

}(jQuery));