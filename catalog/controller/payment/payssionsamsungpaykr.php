<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionSamSungpaykr extends ControllerPaymentPayssion {
    protected $pm_id = 'samsungpay_kr';
}