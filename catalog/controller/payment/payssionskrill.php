<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionSkrill extends ControllerPaymentPayssion {
    protected $pm_id = 'skrill';
}