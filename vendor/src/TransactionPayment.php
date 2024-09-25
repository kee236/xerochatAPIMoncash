<?php

namespace DGCGroup\MonCashPHPSDK;

class TransactionPayment
{
    private $reference;
    private $transactionId;
    private $cost;
    private $message;
    private $payer;

    public function __construct(Array $transactionPaymentValue)
    {
        // Validation des données
        if (!isset($transactionPaymentValue['reference'], $transactionPaymentValue['transaction_id'], $transactionPaymentValue['cost'], $transactionPaymentValue['message'], $transactionPaymentValue['payer'])) {
            throw new \InvalidArgumentException("Invalid transaction payment data.");
        }

        $this->reference = $transactionPaymentValue['reference'];
        $this->transactionId = $transactionPaymentValue['transaction_id'];
        $this->cost = $transactionPaymentValue['cost'];
        $this->message = $transactionPaymentValue['message'];
        $this->payer = $transactionPaymentValue['payer'];
    }

    public function getReference()
    {
        return $this->reference;
    }
    
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    
    public function getCost()
    {
        return $this->cost;
    }
    
    public function getMessage()
    {
        return $this->message;
    }
    
    public function getPayer()
    {
        return $this->payer;
    }
}
