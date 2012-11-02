<?php

define('TIMEPICKERFIELD_MODULE', 'timepickerfield');

if (basename(dirname(__FILE__)) != TIMEPICKERFIELD_MODULE) {
	throw new Exception(TIMEPICKERFIELD_MODULE . ' module not installed in correct directory');
}