<?php
class Power85{

    public function getModuleData(){
        return $this->retrieveData();
    }

    private function retrieveData()
    {
        $data = $this->retrieveApi();
        $audioSource = $data['broadcasts']{0}['streams']['progressive']['url'];
        return $audioSource;
    }

    function retrieveApi()
    {
        $url = "https://api.mixlr.com/users/159490?source=embed";

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        // Execute
        $result = curl_exec($ch);


        $power85 = json_decode($result, true);
        return $power85;
    }
}
