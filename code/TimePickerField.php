<?php
class TimePickerField extends TimeField {

	protected $timePickerConfig = array();

	function Field($properties = array()) {
		$this->addExtraClass('timepicker')
			 ->setAttribute('autocomplete', 'off')
			 ->setAttribute('data-jqueryuiconfig', Convert::array2json($this->timePickerConfig));

		Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
		Requirements::css(THIRDPARTY_DIR . '/jquery-ui-themes/smoothness/jquery-ui.css');
		Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery-ui/jquery-ui.js');

		Requirements::javascript(TIMEPICKERFIELD_MODULE . '/javascript/jquery.ui.timepicker.js');
		Requirements::javascript(TIMEPICKERFIELD_MODULE . '/javascript/timepickerfield.js');
		Requirements::css(TIMEPICKERFIELD_MODULE . '/css/jquery.ui.timepicker.css');

		return parent::Field($properties);
	}

	public function setTimePickerConfig($k, $v){
		$this->timePickerConfig[$k] = $v;
		return $this;
	}

	public function getTimePickerConfig($k = null){
		return $k ? $this->timePickerConfig[$k] : $this->timePickerConfig;
	}

}