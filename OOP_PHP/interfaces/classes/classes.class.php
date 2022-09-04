<?php

//Interfaces

interface PaymentInterface{
    public function payNow();
    public function paymentProcess();
}

class Paypal implements PaymentInterface{
    private function login(){

    }

    public function payNow(){

    }

    public function paymentProcess(){
        $this->login();
        $this->payNow();
    }
}

class Visa implements PaymentInterface{
    public function payNow(){
        
    }

    public function paymentProcess(){
        $this->payNow();
    }
}

class Cash implements PaymentInterface{
    public function payNow(){
        
    }

    public function paymentProcess(){
        $this->payNow();
    }
}

class BuyProduct{
    public function pay(PaymentInterface $paymentType){
        $paymentType->paymentProcess();

    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType); 