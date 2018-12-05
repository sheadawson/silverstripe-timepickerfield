<?php

namespace SheaDawson\TimePickerField;

use SilverStripe\Forms\DatetimeField;

/**
 * Extends DatetimeField to use TimePickerField instead of TimeField
 *
 * @package timepickerfield
 */
class DatetimePickerField extends DatetimeField
{

    /**
     * DatetimePickerField constructor.
     *
     * @param string $name
     * @param string $title
     * @param string $value
     */
    public function __construct($name, $title = null, $value = "")
    {
        parent::__construct($name, $title, $value);

        $this->setTimeField(
            TimepickerField::create($name . '[time]', false)
                ->addExtraClass('fieldgroup-field')
        );
        $this->addExtraClass('datetime');
    }
}
