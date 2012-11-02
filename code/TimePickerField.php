<?php
class TimePickerField extends TimeField {

	function Field($properties = array()) {
		$this->addExtraClass('timepicker');
		$this->setAttribute('autocomplete', 'off');

		Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
		Requirements::css(THIRDPARTY_DIR . '/jquery-ui-themes/smoothness/jquery-ui.css');
		Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery-ui/jquery-ui.js');

		Requirements::javascript(TIMEPICKERFIELD_MODULE . '/javascript/jquery.ui.timepicker.js');
		Requirements::javascript(TIMEPICKERFIELD_MODULE . '/javascript/timepickerfield.js');
		Requirements::css(TIMEPICKERFIELD_MODULE . '/css/jquery.ui.timepicker.css');

		return parent::Field($properties);
	}

}