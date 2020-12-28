<?php
    require_once '../module/Power85.php';

    $module = new Power85();
    $data = $module->getModuleData();

?>

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
<div class="wrapper">
    <?php echo $data; ?>
    <img onclick="playPower85()" class="bg" src="../../../media/images/power85.png">
    <audio id="power85" autoplay="autoplay" src="http://listen1.mixlr.com/4adb41dcd4574330c802ba0c329430e1"></audio>
</div>

<script type="text/javascript">
    var audio = document.getElementById("power85");
    console.log(audio.volume);
    function playPower85(){
        if (audio.paused) {
            audio.play();
        }
        else {
            audio.pause();
        }
    }
</script>