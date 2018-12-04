<?php

namespace SheaDawson\TimePickerField;

use SilverStripe\Core\Convert;
use SilverStripe\Forms\TimeField;
use SilverStripe\ORM\FieldType\DBHTMLText;
use SilverStripe\View\Requirements;

class TimePickerField extends TimeField
{

    /**
     * Use HTML5-based input fields (and force ISO 8601 time formats).
     *
     * @var bool
     */
    protected $html5 = false;

    protected $timeFormat = "hh:mm a";

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

        Requirements::javascript('silverstripe/admin: thirdparty/jquery/jquery.js');
        Requirements::javascript('silverstripe/admin: thirdparty/jquery-ui-themes/smoothness/jquery-ui.css');
        Requirements::javascript('silverstripe/admin: thirdparty/jquery-ui/jquery-ui.js');

        Requirements::javascript('silverstripe/timepickerfield:client/javascript/jquery.ui.timepicker.js');
        Requirements::javascript('silverstripe/timepickerfield:client/javascript/timepickerfield.js');
        Requirements::css('silverstripe/timepickerfield:client/css/jquery.ui.timepicker.css');

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
