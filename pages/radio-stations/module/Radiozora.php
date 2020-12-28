<?php
class Radiozora{

    public function getModuleData(){
        return $this->retrieveData();
    }

    private function retrieveData()
    {
        $data = $this->retrieveApi();
        $name = $data['name'];
        $image = $data['album_artwork_image'];
        return array($name, $image);
    }

    function retrieveApi()
    {
        $url = "https://trance.airtime.pro/api/live-info";

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        // Execute
        $result = curl_exec($ch);


        $radiozora = json_decode($result, true);
        return $radiozora['current'];
    }
}
