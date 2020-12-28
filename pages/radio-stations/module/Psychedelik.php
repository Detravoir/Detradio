<?php
class Psychedelik{

    public function getModuleData(){
        return $this->retrieveData();
    }

    private function retrieveData()
    {
        $data = $this->retrieveApi();
        $row = $data[0];
        $name = $row['songtitle'];
        return array($name);
    }

    function retrieveApi()
    {
        $url = "http://www.psychedelik.com/stream-stats.php?port=8000";

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        // Execute
        $result = curl_exec($ch);


        $psychedelik = json_decode($result, true);
        return $psychedelik['streams'];
    }
}
