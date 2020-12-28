<?php
class PirateStation{

    public function getModuleData(){
        return $this->retrieveData();
    }

    private function retrieveData()
    {
        $data = $this->retrieveApi();
        $name = $data['Pirate Station'];
        return $name;
    }

    function retrieveApi()
    {
        $url = "https://dnbfm.ru/stations.json?_=1509723057598";

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        // Execute
        $result = curl_exec($ch);


        $pirateStation = json_decode($result, true);
        return $pirateStation;
    }
}
