<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssioniDEALnl extends ControllerPaymentPayssion {
	protected $pm_id = 'ideal_nl';
}