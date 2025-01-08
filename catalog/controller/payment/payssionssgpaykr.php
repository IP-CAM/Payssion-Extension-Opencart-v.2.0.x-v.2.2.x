<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionSsgpaykr extends ControllerPaymentPayssion {
    protected $pm_id = 'ssgpay_kr';
}