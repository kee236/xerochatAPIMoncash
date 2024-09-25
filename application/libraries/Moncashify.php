<?php

defined('BASEPATH') OR exit('No direct script access allowed');
// Moncashify.php
use DGCGroup\MonCashPHPSDK\Order;
use DGCGroup\MonCashPHPSDK\Credentials;
class Moncashify
{
    private $clientId;
    private $clientSecret;
    private $configArray;

    public function __construct($clientId, $clientSecret, $configArray)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->configArray = $configArray;
    }

    public function createPayment(Order $order)
    {
        $credentials = new Credentials($this->clientId, $this->clientSecret,$this->$mode);
        return PaymentMaker::makePaymentRequest($order, $credentials, $this->configArray);
    }
}
