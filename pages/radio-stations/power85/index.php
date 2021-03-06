<?php
    require_once '../module/Power85.php';

    $module = new Power85();
    $data = $module->getModuleData();
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Sat May 06 2017 15:45:02 GMT+0000 (UTC)  -->
<html data-wf-page="590a4d20c29c7411b413436e" data-wf-site="590a4d20c29c7411b413436d">

    <head>
        <meta charset="utf-8">
        <title>Computer illustration and animation built in Webflow</title>
        <meta content="I recreated a computer illustration by Ryan Morrison in Webflow with HTML and CSS visually, without writing any code." name="description">
        <meta content="Computer illustration and animation built in Webflow" property="og:title">
        <meta content="I recreated a computer illustration by Ryan Morrison in Webflow with HTML and CSS visually, without writing any code." property="og:description">
        <meta content="https://daks2k3a4ib2z.cloudfront.net/590a4d20c29c7411b413436d/590a734275863b10c5040d35_computer-screen-animation-1200x600.gif" property="og:image">
        <meta content="summary" name="twitter:card">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Webflow" name="generator">
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/webflow.css" rel="stylesheet" type="text/css">
        <link href="css/computer-illustration.webflow.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
        <script type="text/javascript">
            WebFont.load({
                google: {
                    families: [
                        "Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"
                    ]
                }
            });
        </script>
        <script src="js/modernizr.js" type="text/javascript"></script>
        <link href="../../media/images/favicon.png" rel="shortcut icon" type="image/x-icon">
        <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
    </head>

    <body onclick="playPower85()">

        <div id="div">
            <audio id="power85" autoplay="autoplay" src="<?php echo $data; ?>"></audio>
        </div>

        <div class="dark fs">
            <div class="hold-illustration w-preserve-3d">
                <div class="cs__parent w-preserve-3d">
                    <div class="cs__hero-section">
                        <div class="cs__top-bar w-clearfix">
                            <div class="green-button" data-ix="float-in-top-1"></div>
                            <div class="green-button small" data-ix="float-in-top-4"></div>
                            <div class="green-button small" data-ix="float-in-top-3"></div>
                            <div class="green-button small" data-ix="float-in-top-2"></div>
                        </div>
                        <div class="cs__hero-text w-clearfix w-preserve-3d">
                            <div class="hold-letter" data-ix="show-letter-1">
                                <div>P</div>
                            </div>
                            <div class="hold-letter" data-ix="show-letter-2">
                                <div>O</div>
                            </div>
                            <div class="hold-letter" data-ix="show-letter-3">
                                <div>W</div>
                            </div>
                            <div class="hold-letter" data-ix="show-letter-4">
                                <div>E</div>
                            </div>
                            <div class="hold-letter" data-ix="show-letter-5">
                                <div>R</div>
                            </div>
                            <div class="hold-letter" data-ix="show-letter-7">
                                <div>8</div>
                            </div>
                            <div class="hold-letter" data-ix="show-letter-8">
                                <div>5</div>
                            </div>
                            <div class="cs__cursor-text-icon" data-ix="cursor-flash"></div>
                        </div>
                        <div class="cs__left-side" data-ix="float-out-from-left"></div>
                        <div class="cs__right-block w-preserve-3d" data-ix="float-out-from-right"></div>
                    </div>
                    <div class="cs__content w-clearfix">
                        <div class="text-like-box">
                            <div class="overflow-hide w-clearfix">
                                <div class="text" data-ix="arrow-load">A</div>
                                <div class="straight-line" data-ix="arrow-load"></div>
                                <div class="straight-line-full" data-ix="loading-line-animation"></div>
                                <div class="straight-line-full" data-ix="loading-line-animation-2"></div>
                                <div class="straight-line-full" data-ix="loading-line-animation-4-shortened"></div>
                                <div class="straight-line-full" data-ix="loading-line-animation-5"></div>
                                <div class="shortened straight-line-full" data-ix="loading-line-animation-6shorted"></div>
                            </div>
                        </div>
                        <div class="cs__hold-image">
                            <div class="mountain-photo__real-deal w-preserve-3d" data-ix="arrow-load">
                                <div class="mountain" data-ix="mountain-slide-in-from-left"></div>
                                <div class="_2 mountain" data-ix="mountain-slide-in"></div>
                            </div>
                        </div>
                        <div class="cs__bottom-block"></div>
                    </div>
                </div>
                <div class="keyboard-parent w-clearfix">
                    <div class="keyboard__button" data-ix="type-letter-7"></div>
                    <div class="_2 keyboard__button" data-ix="type-letter-2"></div>
                    <div class="_3 keyboard__button" data-ix="type-letter-9"></div>
                    <div class="_4 keyboard__button" data-ix="type-letter-8"></div>
                    <div class="_5 keyboard__button" data-ix="type-letter-5"></div>
                    <div class="_7 keyboard__button" data-ix="type-letter-3"></div>
                    <div class="_8 keyboard__button"></div>
                    <div class="_9 keyboard__button"></div>
                    <div class="_10 keyboard__button"></div>
                    <div class="_11 keyboard__button" data-ix="type-letter-10"></div>
                    <div class="_12 keyboard__button"></div>
                    <div class="_13 keyboard__button" data-ix="type-letter-1"></div>
                    <div class="_14 keyboard__button"></div>
                    <div class="_15 keyboard__button"></div>
                    <div class="_16 keyboard__button"></div>
                    <div class="_17 keyboard__button"></div>
                    <div class="keyboard__button space-bar" data-ix="type-letter-6"></div>
                    <div class="_18 keyboard__button"></div>
                    <div class="_18 keyboard__button"></div>
                </div>
            </div>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js'></script>
        <script src="js/webflow.js" type="text/javascript"></script>
        <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

        <script type="text/javascript">
            var audio = document.getElementById("power85");
            var url = "index.php";

            audio.onended = function () {
                $('#div').load(url + '#power85');
            };

            function playPower85(){
                if (audio.paused) {
                    audio.play();
                }
                else {
                    audio.pause();
                }
            }
        </script>
    </body>
</html>