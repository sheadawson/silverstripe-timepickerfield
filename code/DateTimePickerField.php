<?php
/**
 * Extends DatetimeField to use TimePickerField instead of TimeField
 * 
 * @package timepickerfield
 */
class DatetimePickerField extends DatetimeField {
		
	public function __construct($name, $title = null, $value = ""){
		parent::__construct($name, $title, $value);
		$this->timeField = TimepickerField::create($name . '[time]', false);
	}

}
