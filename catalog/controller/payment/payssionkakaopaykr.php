<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionKakaopaykr extends ControllerPaymentPayssion {
    protected $pm_id = 'kakaopay_kr';
}