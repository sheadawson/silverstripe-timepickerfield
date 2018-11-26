<?php

namespace SheaDawson\TimePickerField;

use SilverStripe\Core\Convert;
use SilverStripe\Forms\TimeField;
use SilverStripe\ORM\FieldType\DBHTMLText;
use SilverStripe\View\Requirements;

class TimePickerField extends TimeField
{

    /**
     * @var array
     */
    protected $timePickerConfig = array();

    /**
     * @param array $properties
     *
     * @return DBHTMLText
     */
    public function Field($properties = array())
    {
        $this->addExtraClass('timepicker')
             ->setAttribute('autocomplete', 'off')
             ->setAttribute('data-jqueryuiconfig', Convert::array2json($this->timePickerConfig));

        Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
        Requirements::css(THIRDPARTY_DIR . '/jquery-ui-themes/smoothness/jquery-ui.css');
        Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery-ui/jquery-ui.js');

        Requirements::javascript('SheaDawson/TimePickerField:client/javascript/jquery.ui.timepicker.js');
        Requirements::javascript('SheaDawson/TimePickerField:client/javascript/timepickerfield.js');
        Requirements::css('SheaDawson/TimePickerField:client/css/jquery.ui.timepicker.css');

        return parent::Field($properties);
    }

    /**
     * @param $k
     * @param $v
     *
     * @return $this
     */
    public function setTimePickerConfig($k, $v)
    {
        $this->timePickerConfig[$k] = $v;
        return $this;
    }

    /**
     * @param null $k
     *
     * @return array|mixed
     */
    public function getTimePickerConfig($k = null)
    {
        return $k ? $this->timePickerConfig[$k] : $this->timePickerConfig;
    }
}
