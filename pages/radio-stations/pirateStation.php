<?php
//    require_once 'pirateStationClass.php';
//    $module =  new pirateStationClass();
//    $data = $module->getModuleData();
//    echo json_encode($data)
//?>

<style>
    .wrapper {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .bg {
        position: absolute;
        width: 100%;
        height: 100%;
        border: 2px solid #808080;
        /*border-radius: 5px;*/
        z-index: 1;
    }
</style>

<div style="border-bottom: 2px solid #808080; height: 45px; background-color: #afafaf; text-align: center">
    <button onclick="setHalfVolume();" name="sethalf">Set Volume to half</button>
    <button onclick="setFullVolume();" name="setfull">Set Volume to full</button><br/>
    <button onclick="playPirateStation();" name="turn">pause</button>
</div><br/>

<div class="wrapper">
    <img  onclick="playPirateStation()" class="bg" src="../../media/images/piratestation.jpg">
    <audio id="piratestation" autoplay="autoplay" src="http://air2.radiorecord.ru:805/ps_320?1509444610"></audio>
</div>

<script type="text/javascript">
    let audio = document.getElementById("piratestation");
    audio.volume =  0.2;
    audio.addEventListener('ended', function(){
        audio.play();
    });
    function playPirateStation(){
        if (audio.paused) {
            audio.play();
        }
        else {
            audio.pause();
        }
    }
    function setHalfVolume(){
        audio.volume = 0.2;
    }
    function setFullVolume(){
        audio.volume = 1;
    }
</script>