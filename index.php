<!--PROGRAM IN START MENU-->
<!--<li class="dropdown-item launch" data-launch="LAUNCH CLASS" data-title="TITLE" data-icon="ICON" data-url="URL">NAAM</li>-->

<!--PROGRAM ON DESKTOP-->
<!--<div class="desktop-item launch desktop-icon" data-launch="LAUNCH ICON" data-title="TITLE" data-icon="ICON" data-url="URL">
        <p class="desktop-icon-title">NAME</p>
    </div>-->

<?php
  spl_autoload_register(function($class){
  $directories = array('pages/radio-stations/module/');
  foreach ($directories as $directory) {
    if (file_exists($directory . $class . ".php")) {
      require_once $directory . $class . ".php";
      break;
    } else continue;
  }
});

  $modules =  array(
      new Radiozora(),
      new PirateStation(),
      new RadiozoraChill(),
      new Psychedelik()
  );

  $data = array();
  foreach ($modules as $module){
      $data[] = $module->getModuleData();
  }
?>
<!DOCTYPE html>
<html content="application/x-www-form-urlencoded; charset=UTF-8">
  <head>
      <script>
          function alertUser(msg) {
              alert(msg)
          }
      </script>
    <meta charset="UTF-8">
    <title>Detradio</title>
        <link rel="stylesheet" href="css/style.css">
      <link rel="shortcut icon" href="media/images/favicon.ico" type="image/x-icon" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body onload="alertUser('Welcome to Detradio, here you can listen to a lot of live radio broadcasts. You can also find information about me and some school projects that i\'ve worked on/created. ' +
   'Also, check your volume before opening radio stations, it can be loud!! ')">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css" type="text/css"/>
    <div class="startbar">
      <div id="startbutton" class="startbutton-off">
        <b>Start</b>
      </div>
      <div class="time launch" data-launch="time" data-title="time" data-icon="" data-url="pages\time\index.html">
      </div>
    </div>


    <div id="menu">
      <div class="sidebar"></div>
      <div class="headline"><b>Windows</b> 98 </div>
      <ul class="menu-content">

<!--        PROGRAMS-->
        <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990247/directory_program_group_small_fqw8rr.ico">Programs
          <ul class="dropdown-content dropdown-to-many">
            <li class="dropdown-item-more more" data-icon="https://orig00.deviantart.net/60a0/f/2015/168/0/0/trippy_icon__free_to_use___by_candyprincessaryanna-d8xoqks.gif">Trippy
                <ul class="dropdown-content-2">

                </ul>
            </li>
            <li class="dropdown-item" data-icon="https://res.cloudinary.com/penry/image/upload//w_65,h_65,c_lpad/v1474990266/msie2_ks3wek.png">Internet Explorer</li>
            <li class="dropdown-item launch" data-launch="notepad" data-title="Notepad" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="pages\notepad.php">Notepad</li>
            <li class="dropdown-item launch" data-launch="paint" data-title="Paint" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="https://sketch.io/sketchpad/">Paint</li>
            <li class="dropdown-item launch" data-launch="life" data-title="L I F E . E X E" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="http://wormax.io/">L I F E . E X E</li>
            <li class="dropdown-item launch" data-launch="useless" data-title="Useless web" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="http://www.theuselessweb.com/">Useless web</li>
            <li class="dropdown-item launch" data-launch="thomasboard" data-title="Thomas board" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="https://kozie.github.io/thomasboard/">Thomas board</li>
            <li class="dropdown-item launch" data-launch="solarsystemexplorer" data-title="Solar System Explorer" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="pages\solar-system-explorer\index.html">Solar System Explorer</li>
          </ul>
        </li>

<!--        PHOTOS-->
        <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload/w_65,h_65,c_lpad/v1474990246/directory_pictures_ualddt.png">Photos
          <ul class="dropdown-content">
            <li class="dropdown-item launch" data-launch="pepe" data-title="Rare Pepe.jpg" data-icon="https://res.cloudinary.com/penry/image/upload/q_100/v1474990272/pictures_bt9tfg.ico" data-url="http://penry.me/projects/windows98/rarepepe/">Rare Pepe.jpg</li>
            <li class="dropdown-item launch" data-launch="dank" data-title="Requiem for a meme.gif" data-icon="https://res.cloudinary.com/penry/image/upload/q_100/v1474990272/pictures_bt9tfg.ico" data-url="http://penry.me/projects/windows98/requiem/">Requiem for a meme.gif</li>
            <li class="dropdown-item launch" data-launch="igdetra" data-title="Detravoir's IG" data-icon="https://instagram-brand.com/wp-content/uploads/2016/11/app-icon2.png" data-url="http:///lightwidget.com/widgets/a0012b312121533d8364205c218beffe.html">Detravoir's IG</li>
          </ul>
        </li>


<!--        MUSIC-->
        <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload//w_40,h_40,c_lpad/v1474990234/cd_audio_cd_mcloiq.png">Music
          <ul class="dropdown-content dropdown-music">

<!--              RADIO STATIONS FOLDER-->
            <li class="dropdown-item-more more" data-icon="http://cd.textfiles.com/winfiles/winfiles1/gifs/folder.gif"> Radio stations
                <ul class="dropdown-content-2 dropdown-to-many">
                    <li class="dropdown-item launch"  data-launch="радиорекорд" data-title="радио рекорд" data-icon="media/images/radiorecord.jpg" data-url="http://www.radiorecord.ru/">радио рекорд</li>
                    <li class="dropdown-item launch" data-launch="R" data-title="Radiozora | <?php echo $data['0']['0']; ?>" data-icon="<?php if ($data['0']['1'] != ""){echo $data['0']['1'];}else{echo "https://radiozora.fm/wp-content/themes/radiozora.fm/images/oo.png";} ?>" data-url="pages\radio-stations\radiozora.php">Radiozora</li>
                    <li class="dropdown-item launch" data-launch="RC" data-title="RadiozoraChill | <?php echo $data['2']; ?>" data-icon="https://radiozora.fm/wp-content/themes/radiozora.fm/images/oo.png" data-url="pages\radio-stations\radiozoraChill.php">RadiozoraChill</li>
                    <li class="dropdown-item launch" data-launch="PS" data-title="Pirate Station | <?php echo $data['1'][0]; ?>" data-icon="https://dnbfm.ru/wp-content/uploads/2015/11/ps1-200x200.jpg" data-url="pages\radio-stations\pirateStation.php">Pirate Station</li>
                    <li class="dropdown-item launch" data-launch="NFM" data-title="Nashville FM" data-icon="http://www.nashvilletv.nl/wp-content/uploads/2016/08/logo-white-fm-2.png" data-url="pages\radio-stations\nashvilleFM.php">Nashville FM</li>
                    <li class="dropdown-item launch" data-launch="p85" data-title="POWER85" data-icon="https://mixlr-assets.s3.amazonaws.com/users/8a39ebccbd35d2c85580fdda23035556/thumb.jpg?1369885137" data-url="pages\radio-stations\power85\index.php">POWER85</li>
                    <li class="dropdown-item launch" data-launch="Plaza" data-title="Nightwave Plaza" data-icon="https://plaza.one/img/icons/favicon-32x32.png" data-url="https://plaza.one/">Nightwave Plaza</li>
                    <li class="dropdown-item launch" data-launch="CC" data-title="Current Condition" data-icon="http://currentcondition.org/assets/favicon_large-f3bfed70454b264c28d154d6f8b3f821.jpg" data-url="http://currentcondition.org/">Current Condition</li>
                    <li class="dropdown-item launch" data-launch="ГОПFM" data-title="ГОП FM" data-icon="http://radioportal.ru/sites/default/files/uploads/main_photo/4070.jpg" data-url="pages\radio-stations\ГОПFM.php">ГОП FM</li>
                    <li class="dropdown-item launch" data-launch="Psychedelik" data-title="Psychedelik | <?php echo $data['3'][0]; ?>" data-icon="http://www.psychedelik.com/img/psytrance.jpg" data-url="pages\radio-stations\psychedelik\index.html">Psychedelik</li>
                    <li class="dropdown-item launch" data-launch="EiloRadio" data-title="Eilo Radio" data-icon="https://static-media.streema.com/media/cache/ee/c5/eec58aa67bc37f4b2e4b5e950b210c6f.jpg" data-url="pages\radio-stations\eliorioadio\index.html">Eilo Radio</li>
                    <li class="dropdown-item launch" data-launch="RecordHardBass" data-title="Record Hard Bass" data-icon="https://data.whicdn.com/images/300738126/superthumb.png" data-url="pages\radio-stations\recordHardBass.php">Record Hard Bass</li>
                    <li class="dropdown-item launch" data-launch="TRR" data-title="Third Rock Radio" data-icon="http://player.streamguys.com/thirdrock/sgplayer/include/assets/img/ThirdRockRadio500x500.jpg" data-url="pages\radio-stations\thirdRockRadio.php">Third Rock Radio</li>
                    <li class="dropdown-item launch" data-launch="amoris" data-title="Amoris Dub Techno" data-icon="http://geo-media.beatport.com/image_size/500x500/23f7a9b9-1c1b-433f-82f4-f1ae72229862.jpg" data-url="pages\radio-stations\amorisDubTechno.php">Amoris Dub Techno</li>
                </ul>
            </li>

<!--               SAVANT FOLDER-->
              <li class="dropdown-item-more more" data-icon="http://cd.textfiles.com/winfiles/winfiles1/gifs/folder.gif">Savant
                  <ul class="dropdown-content-2">
                      <li class="dropdown-item launch" data-launch="heartbreakers" data-title="Savant - Heartbreakers" data-icon="http://images.genius.com/efdc4b601e3713d1271d55f8480960fa.1000x1000x1.jpg" data-url="http://www.youtube.com/embed/JqUAD-FOJgY?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">Savant - Heartbreakers</li>
                      <li class="dropdown-item launch" data-launch="highlander" data-title="Aleksander Vinter - Highlander" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/kg6JRilwc7I?&autoplay=1&loop=1&rel=0&disablekb=1&hd=11&color=white">Aleksander Vinter - Highlander</li>
                      <li class="dropdown-item launch" data-launch="mortals" data-title="Savant - Mortals" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/ReEjRwDUU4A?&autoplay=1&loop=1&rel=0&disablekb=1&hd=11&color=white">Savant - Mortals</li>
                  </ul>
              </li>

<!--              DETRAVOIR FOLDER-->
            <li class="dropdown-item-more more" data-icon="http://cd.textfiles.com/winfiles/winfiles1/gifs/folder.gif">Detravoir
                <ul class="dropdown-content-2">
                    <li class="dropdown-item launch" data-launch="tingeling" data-title="Detravoir - TingeLing Ft. Demerkies" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/307138930&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true">Detravoir - TingeLing Ft. Demerkies</li>
                    <li class="dropdown-item launch" data-launch="glücklich" data-title="Demerkies - Glücklich Dorf Ft. Detravoir" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/329568332&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true">Demerkies - Glücklich Dorf Ft. Detravoir</li>
                    <li class="dropdown-item launch" data-launch="DD" data-title="Detravoir - Do Drugs" data-icon="https://lh3.googleusercontent.com/CNpLPsz5_CH1yu-qaS5eJZgURXMW-d8x0Kry41yVWSgS2883H3CeTvEdQNVke8ry3N7I=w170" data-url="http://www.youtube.com/embed/TvhQRrHwG0w?&autoplay=1&rel=0&disablekb=1&hd=1&color=white">Detravoir - Do Drugs</li>
                    <li class="dropdown-item launch" data-launch="DDPT2" data-title="Detravoir - Do Drugs Part 2" data-icon="https://lh3.googleusercontent.com/CNpLPsz5_CH1yu-qaS5eJZgURXMW-d8x0Kry41yVWSgS2883H3CeTvEdQNVke8ry3N7I=w170" data-url="http://www.youtube.com/embed/inC7FAL2Xqw?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">Detravoir - Do Drugs Part 2</li>
                    <li class="dropdown-item launch" data-launch="ScooboSnox" data-title="Detravoir - Scoobo Snox Ft. Demerkies" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/8ub6oBi9WjY?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">Detravoir - Scoobo Snox Ft. Demerkies</li>
                    <li class="dropdown-item launch" data-launch="BreakMyStridRemix" data-title="Detravoir - Break My Stride (Psytrance Remix)" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/z4gkkuDSnz0?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">Detravoir - Break My Stride (Psytrance Remix)</li>
                    <li class="dropdown-item launch" data-launch="SelfImprovement" data-title="Detravoir Ft. DuckRider - Self Improvement" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/IkbYwoZ6WI0?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">Detravoir Ft. DuckRider - Self Improvement</li>
                </ul>
            </li>

<!--              PSYTRANCE FOLDER-->
            <li class="dropdown-item-more more" data-icon="http://cd.textfiles.com/winfiles/winfiles1/gifs/folder.gif"> Psytrance
                <ul class="dropdown-content-2">
                    <li class="dropdown-item launch" data-launch="IMSMAN" data-title="Infected Mushroom - Send Me an Angel" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="https://www.youtube.com/embed/4l8Wkrb5JNw">Infected Mushroom - Send Me an Angel</li>
                    <li class="dropdown-item launch" data-launch="DJW" data-title="Astrix - Deep Jungle Walk" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/lIuEuJvKos4?&autoplay=1&rel=0&loop=1&showinfo=0&controls=0&hd=1&autohide=0&color=white&playlist=lIuEuJvKos4">Astrix - Deep Jungle Walk</li>
                    <li class="dropdown-item launch" data-launch="genesis" data-title="UnderCover - Genesis [Full Album]" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/394368009&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true">UnderCover - Genesis [Full Album]</li>
                    <li class="dropdown-item launch" data-launch="BurningStones" data-title="Astrix - Burning Stones" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/368505449&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true">Astrix - Burning Stones</li>
                    <li class="dropdown-item launch" data-launch="Adhana" data-title="Vini Vici & Astrix - Adhana" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/366227183&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true">Vini Vici & Astrix - Adhana</li>
                    <li class="dropdown-item launch" data-launch="PsychedelicTrancemixNovember2017" data-title="Psychedelic Trance mix November 2017" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/geajCOmYRcw?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">Psychedelic Trance mix November 2017</li>
                    <li class="dropdown-item launch" data-launch="xsprojectmushroomsforbitcoins" data-title="XS Project - Mushrooms for bitcoins" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/-EzkUmQovvM?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">XS Project - Mushrooms for bitcoins</li>
                    <li class="dropdown-item launch" data-launch="RickandMorty" data-title="Rick and Morty (Rameses B 'Psytrance' Remix)" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/iMHVfCyElW0?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">Rick and Morty (Rameses B 'Psytrance' Remix)</li>
                </ul>
            </li>

            <li class="dropdown-item launch" data-launch="420" data-title="MACINTOSH PLUS - リサフランク420 / 現代のコンピュー.mp3" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/cU8HrO7XuiE?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">MACINTOSH PLUS 420.mp3</li>
             <li class="dropdown-item launch" data-launch="hype" data-title="Hard Bass School - hype 2k!8" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/p5Aa4UU2xT8?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">Hard Bass School - hype 2k!8</li>
            <li class="dropdown-item launch" data-launch="horsecock" data-title="No cock Like horse cock Pepper Coyote" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/h2dJ-JUzhVs?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">No cock Like horse cock Pepper Coyote</li>
            <li class="dropdown-item launch" data-launch="undertale" data-title="Undertale Orchestral" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="http://www.youtube.com/embed/MEsuE35uSvo?&autoplay=1&loop=1&rel=0&disablekb=1&hd=1&color=white">Undertale Orchestral</li>
            <li class="dropdown-item launch" data-launch="automatic" data-title="The Automatic" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="https://open.spotify.com/embed/user/detravoir/playlist/2bTlC2mmVn5wNruu00zP09">The Automatic</li>
            <li class="dropdown-item launch" data-launch="fairytale" data-title="Demerkies - 舞-HiME Fairy Tale" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990282/SoundYel_aunogm.ico" data-url="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/422107350&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true">Demerkies - 舞-HiME Fairy Tale</li>
          </ul>
        </li>

<!--        VIDEOS-->
        <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload/c_lpad,g_center,r_0,w_65/v1474990261/media_player_file_sqjlgm.png">Videos
          <ul class="dropdown-content">
            <li class="dropdown-item launch" data-launch="sundaySchool" data-title="ＳＵＮＤＡＹ ＳＣＨＯＯＬ.mp4" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990261/media_player_file_sqjlgm.png" data-url="https://www.youtube.com/embed/rTfa-9aCTYg">ＳＵＮＤＡＹ ＳＣＨＯＯＬ.mp4</li>
            <li class="dropdown-item launch" data-launch="kungFury" data-title="KUNG FURY.mp4" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990261/media_player_file_sqjlgm.png" data-url="https://www.youtube.com/embed/bS5P_LAqiVg">KUNG FURY.mp4</li>
            <li class="dropdown-item launch" data-launch="ponyandboy" data-title="Pony & Boy" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990261/media_player_file_sqjlgm.png" data-url="https://www.youtube.com/embed/f-v-wIX9ggI">Pony & Boy</li>
          </ul>
        </li>


<!--        OTHERS-->
        <li class="item settings" data-icon="https://res.cloudinary.com/penry/image/upload/q_100/v1474990280/settings_gear_zxd7tf.ico">Settings</li>
        <li class="item" data-launch="find" data-title="Find" data-icon="https://res.cloudinary.com/penry/image/upload/q_100/v1474990279/search_file_2_yy4muv.ico" data-url="">Find</li>
        <li class="item" data-launch="Help" data-title="Help" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990254/help_book_small_ra0uhc.ico" data-url="">Help</li>
        <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990231/application_hourglass_small_yyhy5z.ico" data-url="">Run</li>
        <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990258/key_win_anpnfo.ico">Log off</li>
        <li class="item" data-launch="Shutdown" data-title="Shutdown" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990281/shut_down_normal_t24or4.ico" data-url="pages/shutdown.html">Shutdown</li>
      </ul>
    </div>

    <div class="desktop">
      <div class="columns">

<!--        ROW 1-->
        <div class="column">

            <div class="desktop-item launch desktop-icon" data-launch="радиорекорд" data-title="радио рекорд" data-icon="media/images/radiorecord.jpg" data-url="https://www.radiorecord.ru/stations">
                <p class="desktop-icon-title">радио рекорд</p>
            </div>

          <div class="desktop-item launch desktop-icon" data-launch="PS" data-title="Pirate Station | <?php echo $data['1'][0]; ?>" data-icon="https://dnbfm.ru/wp-content/uploads/2015/11/ps1-200x200.jpg" data-url="pages\radio-stations\pirateStation.php">
            <p class="desktop-icon-title">Pirate Station</p>
          </div>

            <div class="desktop-item launch desktop-icon" data-launch="Psychedelik" data-title="Psychedelik | <?php echo $data['3'][0]; ?>" data-icon="http://www.psychedelik.com/img/psytrance.jpg" data-url="pages\radio-stations\psychedelik\index.html">
                <p class="desktop-icon-title">Psychedelik</p>
            </div>

          <div class="desktop-item launch desktop-icon" data-launch="R" data-title="Radiozora |  <?php echo $data['0']['0']; ?>" data-icon="<?php if ($data['0']['1'] != ""){echo $data['0']['1'];}else{echo "https://i1.sndcdn.com/artworks-000071098319-473rmc-t500x500.jpg";} ?>" data-url="pages\radio-stations\radiozora.php">
            <p class="desktop-icon-title">Radiozora</p>
          </div>

          <div class="desktop-item launch desktop-icon" data-launch="RC" data-title="RadiozoraChill | <?php echo $data['2']; ?>" data-icon="https://i1.sndcdn.com/artworks-000071098319-473rmc-t500x500.jpg" data-url="pages\radio-stations\radiozoraChill.php">
            <p class="desktop-icon-title">RadiozoraChill</p>
          </div>

            <div class="desktop-item launch desktop-icon" data-launch="Plaza" data-title="Nightwave Plaza" data-icon="https://plaza.one/img/icons/favicon-32x32.png" data-url="https://plaza.one/">
                <p class="desktop-icon-title">Nightwave Plaza</p>
            </div>

        </div>

<!--        ROW 2-->
        <div class="column">

            <div class="desktop-item launch desktop-icon" data-launch="notepad" data-title="Notepad" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="pages\notepad.php">
                <p class="desktop-icon-title">Notedpad</p>
            </div>

        </div>

<!--        ROW 3-->
        <div class="column">



        </div>

<!--          ROW 4-->
          <div class="column">


              <div class="desktop-item launch desktop-icon" data-launch="mariteam" data-title="Mariteam" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="pages/mariteam.html">
                  <p class="desktop-icon-title">Mariteam, virutal learning program</p>
              </div>

              <div class="desktop-item launch desktop-icon" data-launch="reserveringssysteem" data-title="Reserverings Systeem" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="detra/school/periode2/CLE2/index.php">
                  <p class="desktop-icon-title">Back-End school project<br/>"Reserverings Systeem" <br/>(admin inlog is "test", "test")</p>
              </div>

          </div>

<!--          ROW 5-->
          <div class="column">

              <div class="desktop-item launch desktop-icon" data-launch="aboutme" data-title="About Me" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="pages\aboutme.html">
                  <p class="desktop-icon-title">About Me</p>
              </div>

              <div class="desktop-item launch desktop-icon" data-launch="aboutdetradio" data-title="About Detradio" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="pages\aboutdetradio.html">
                  <p class="desktop-icon-title">About Detradio</p>
              </div>

          </div>

<!--        ROW 6-->
          <div class="column">

          </div>

<!--          ROW 7-->
          <div class="column">

          </div>

<!--            ROW 8-->
          <div class="column">

          </div>

<!--            ROW 9-->
          <div class="column">

          </div>

<!--            ROW 10-->
          <div class="column">

          </div>

<!--          ROW 11-->
          <div id="column_11" class="column">

          </div>
      </div>


        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js'></script>
        <script type="text/javascript" src="js/jGravity-min.js"></script>
        <script src="js/index.js"></script>

      <!--Tumblr folder-->
      <script type="text/javascript">
          $(document).ready(function() {
              $('.settings').on('click', function() {
                  $('body').jGravity({
                      target: 'everything',
                      ignoreClass: 'startbar',
                      weight: 25,
                      depth: 5,
                      drag: true
                  });
              });
          });

           function getData(targetId, title, imgUrl, url){
            if (!isWindowOpen(targetId)) {
              createProgram(targetId, title, imgUrl, url);
              $('#menu').hide();
              $("#startbutton").removeClass("startbutton-on");
            } else {
              openWindow(targetId);
              $('#menu').hide();
              $("#startbutton").removeClass("startbutton-on");
              console.log("program already exists... opening window")
            }
          }

          function savedFile(targetId){
              console.log('Saving ' + targetId);
            $("#column_11").append(
                <?php $id = "targetId"?>
                "<div class='desktop-item launch desktop-icon' data-launch='targetId' data-title='" + <?php echo $id; ?> + "' data-icon='https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico' data-url='pages/notepad.php' style='background-image: url(\"https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico\");'>" +
                  "<p class='desktop-icon-title'>" + <?php echo $id; ?> + "</p>" +
                  "</div>"
            );
          }
      </script>
  </body>
</html>
