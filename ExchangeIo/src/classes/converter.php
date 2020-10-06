<?php

require_once('exchangeinfo.php');

Class Converter extends ExchangeInfo{
        
    private $currency1, $currency2, $amount, $convertResult;

    public function convert($currency1, $currency2, $amount){

        $this->currency1 = $currency1;
        $this->currency2 = $currency2;
        $this->amount = $amount;

        $linkStr = "/latest?amount=".$this->amount."&from=".$this->currency1."&to=".$this->currency2;
        
        $this->requestResult = parent::executeRequest($linkStr);

        $this->convertResult = $this->requestResult['rates'];
        
    }

    public function getConvertResult(){
        return $this->convertResult;
    }

}


?>