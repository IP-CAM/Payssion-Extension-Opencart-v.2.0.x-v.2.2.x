<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionNaverpaykr extends ControllerPaymentPayssion {
    protected $pm_id = 'naverpay_kr';
}