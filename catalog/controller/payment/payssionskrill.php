<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionSamSkrill extends ControllerPaymentPayssion {
    protected $pm_id = 'skrill';
}