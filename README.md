silverstripe-timepickerfield
============================

A time picker field based on jQuery UI Timepicker By François Gélinas
[http://fgelinas.com/code/timepicker/](http://fgelinas.com/code/timepicker/)

Requirements
--------

SilverStripe 3

Usage
--------

	TimePickerField::create('Time');

You can set any of the [http://fgelinas.com/code/timepicker/#usage](configurations) by using:

	TimePickerField::create('Time')->setTimePickerConfig($key, $value);