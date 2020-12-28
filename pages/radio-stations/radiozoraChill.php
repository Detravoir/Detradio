<?php
//    require_once 'radiozoraClass.php';
//    $module =  new radiozoraClass();
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

    .play-buttons {
        z-index: 2;
        position: absolute;
    }

    .trance {
        stroke: rgb( 252, 187, 46 );
        stroke-dashoffset: 85;
    }

    .chill {
        stroke: rgb( 35, 193, 194 );
        stroke-dashoffset: 85;
    }

    .outer {
        fill: transparent;
        stroke-width: 3;
        stroke-dasharray: 300;
    }
</style>

<div style="border-bottom: 2px solid #808080; height: 45px; background-color: #afafaf; text-align: center">
    <button onclick="setHalfVolume();" name="sethalf">Set Volume to half</button>
    <button onclick="setFullVolume();" name="setfull">Set Volume to full</button><br/>
    <button onclick="playRadiozoraChill();" name="turn">pause</button>
</div><br/>

<div class="wrapper">
    <img onclick="playRadiozoraChill()" class="bg" src="../../media/images/radiozorabg.jpg">
    <audio id="radiozorachill" autoplay="autoplay" src="http://chill.out.airtime.pro:8000/chill_a"></audio>
</div>

<!--<svg class="play-buttons" width="160" height="80">-->
<!--<circle class="outer trance" cx="55" cy="40" r="36" transform="rotate(-37, 55, 40)"></circle>-->
<!--<circle class="outer chill" cx="105" cy="40" r="36" transform="rotate(143, 105, 40)"></circle>-->
<!--</svg>-->

<script type="text/javascript">
    let audio = document.getElementById("radiozorachill");
    audio.volume = 0.2;
    audio.addEventListener('ended', function(){
        audio.play();
    });
    function playRadiozoraChill(){
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