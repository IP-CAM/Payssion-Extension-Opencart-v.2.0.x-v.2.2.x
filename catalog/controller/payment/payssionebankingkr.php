<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionEbankingkr extends ControllerPaymentPayssion {
    protected $pm_id = 'ebanking_kr';
}