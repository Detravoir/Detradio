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
        z-index: 1;
    }

</style>

<div style="border-bottom: 2px solid #808080; height: 45px; background-color: #afafaf; text-align: center">
    <button onclick="setHalfVolume();" name="sethalf">Set Volume to half</button>
    <button onclick="setFullVolume();" name="setfull">Set Volume to full</button><br/>
    <button onclick="playRadiozora();" name="turn">pause</button>
</div><br/>

<div class="wrapper">
    <img onclick="playRadiozora()" class="bg" src="../../media/images/radiozorabg.jpg">
    <audio id="radiozora" autoplay="autoplay" src="http://trance.out.airtime.pro:8000/trance_a"></audio>
</div>

<!--<svg class="play-buttons" width="160" height="80">-->
    <!--<circle class="outer trance" cx="55" cy="40" r="36" transform="rotate(-37, 55, 40)"></circle>-->
    <!--<circle class="outer chill" cx="105" cy="40" r="36" transform="rotate(143, 105, 40)"></circle>-->
<!--</svg>-->

<script type="text/javascript">
    let audio = document.getElementById("radiozora");
    audio.volume = 0.2
    audio.addEventListener('ended', function(){
        audio.play();
    });
    function playRadiozora(){
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