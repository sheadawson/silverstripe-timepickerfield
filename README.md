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
	
If you need to modify an existing DatetimeField, you can set the time field to a picker by using:

    $field = DatetimeField::create('DateAndTime');
    $field->setTimeField(TimePickerField::create('DateAndTime'));
    
Or if you like you can also use the following to create a DateTimePickerField from scratch:

    $field = DatetimePickerField::create('DateAndTime');
