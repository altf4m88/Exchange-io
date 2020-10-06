<?php 

Class ExchangeInfo {

    protected $requestResponse, $baseCurrency, $requestUrl,
    $historicalDate, $historicalDate1, $historicalDate2, $requestResult;
    const baseUrl = 'https://api.frankfurter.app';

    protected function executeRequest($URLString){
        $this->requestURL = self::baseUrl . $URLString;

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->requestURL
        ]);

        return $this->requestResponse = json_decode(curl_exec($curl), true);

        curl_close($curl);
    }

    public function requestLatestData($baseCurrency = 'EUR'){

        $this->baseCurrency = $baseCurrency;

        $linkStr = '/latest?from='. $this->baseCurrency;

        $this->requestResult = $this->executeRequest($linkStr);

    }

    public function requestName(){
        
        $linkStr = '/currencies';

        $this->requestResult = $this->executeRequest($linkStr);

    }

    public function requestHistoricalData($date, $currency){

        $this->historicalDate = $date;
        $this->baseCurrency = $currency;

        $linkStr = '/'.$this->historicalDate.'?from='.$this->baseCurrency;

        $this->requestResult = $this->executeRequest($linkStr);

    }

    public function requestTimeSeries($date1, $date2, $currency){

        $this->historicalDate1 = $date1;
        $this->historicalDate2 = $date2;
        $this->baseCurrency = $currency;

        $linkStr = '/'.$this->historicalDate1.'..'.$this->historicalDate2.'?from='.$this->baseCurrency;
        
        $this->requestResult = $this->executeRequest($linkStr);

    }

    public function getResult(){
        return $this->requestResult;
    }

}

?>