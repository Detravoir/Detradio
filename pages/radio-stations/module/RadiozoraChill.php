<?php
class RadiozoraChill{

    public function getModuleData(){
        return $this->retrieveData();
    }

    private function retrieveData()
    {
        $data = $this->retrieveApi();
        $name = $data['name'];
        return $name;
    }

    function retrieveApi()
    {
        $url = "https://chill.airtime.pro/api/live-info";

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        // Execute
        $result = curl_exec($ch);


        $radiozoraChill = json_decode($result, true);
        return $radiozoraChill['current'];
    }
}
