
<div id="update-grid" class="ui stackable grid">
  <section id="update" class="ten wide column centered">
    <div class="ui icon message stackable grid" style="margin-left: 0.1rem !important;">
      <div class="icon two wide column">
        <i class="fa fa-bell-o fa-lg"></i>
      </div>
      <div class="content twelve wide column">
        <div class="text text-bold">
          Updates
        </div>
        <ul class="list text">
          <li><a href="https://uist.acm.org/uist2016/schedule">UIST 2016 Program Schedule</a> is now available.</li>
          <li><a href="https://www.youtube.com/playlist?list=PLqhXYFYmZ-VfgFlyej7vQvuQX3mHJlfRE" target="_balnk">UIST 2016 Video Previews</a> and the <a href="https://www.youtube.com/watch?v=8tX1XNq96pQ" target="_balnk">Trailer</a> are both now available on YouTube.</li>
          <li><a href="https://uist.acm.org/uist2016/attending#registration">Registration is full.</a> There is no on-site registration.</li>
          <!--
          <li><a href="https://uist.acm.org/uist2016/attending#registration">The UIST registration page</a> is now open.
          </li>
          <li><b>The UIST submission website</b> is now open:<br>
          <a href="http://precisionconference.com/~sigchi" target="_balnk">http://precisionconference.com/~sigchi</a>
          </li>
          -->

          <!--
          <br>
          <li><b>Upcoming Events:</b><br>
          <b>June 9-16, 2016</b>: The rebuttal period for <a href="http://uist.acm.org/uist2016/papers">Papers</a>
          <br>
          <b>June 26, 2016</b>: Authors will be notified the decision.
          <br>
          <b>July 7, 2016</b>: The deadline for <a href="http://uist.acm.org/uist2016/posters">Posters</a>
          <br>
          <b>July 7, 2016</b>: The deadline for <a href="http://uist.acm.org/uist2016/demos">Demos</a>
          <br>
          <b>July 7, 2016</b>: The deadline for <a href="http://uist.acm.org/uist2016/doctoral">Doctoral Symposium</a>
          <br>
          <b>August 10, 2016</b>: The deadline for <a href="http://uist.acm.org/uist2016/papers">final camera-ready papers</a> and <a href="https://uist.acm.org/uist2016/video-previews">30-second video previews</a>
          <br>
          <b>August 15, 2016 (Extended)</b>: The deadline for <a href="http://uist.acm.org/uist2016/contest">Student Innovation Contest</a>
          <br>
          <b>September 2, 2016</b>: The deadline for <a href="https://uist.acm.org/uist2016/attending#registration">Early-bird Registration</a>
          <br>
          <b>September 30, 2016</b>: The deadline for <a href="https://uist.acm.org/uist2016/attending#registration">Regular Registration</a>
          -->
        </ul>
      </div>

      <div class="video sixteen wide column center">
        <div class="video-container">
          <iframe width="560" height="300" src="https://www.youtube.com/embed/8tX1XNq96pQ" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- <div class="ui embed" data-source="youtube" data-id="8tX1XNq96pQ" data-placeholder="https://uist.acm.org/uist2016/lib/img/youtube-cover.png"></div> -->
        <div class="text centered" style="text-align: center; margin-top: 10px;">
          <a href="https://www.youtube.com/watch?v=8tX1XNq96pQ" target="_balnk">UIST 2016 Technical Program Preview - Trailer</a>
        </div>
      </div>

    </div>
  </section>
</div>

  <script>
  </script>

<div id="welcome-grid" class="ui stackable grid">
  <section id="about" class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Welcome</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered">
        <p class="about text">
          The ACM Symposium on User Interface Software and Technology (UIST) is the premier forum for innovations in human-computer interfaces. Sponsored by ACM special interest groups on computer-human interaction (SIGCHI) and computer graphics (SIGGRAPH), UIST brings together people from diverse areas including graphical & web user interfaces, tangible & ubiquitous computing, virtual & augmented reality, multimedia, new input & output devices, and CSCW. The intimate size and intensive program make UIST an ideal opportunity to exchange research results and ideas. Join us in Tokyo!
        </p>

      </div>
    </div>
  </section>
</div>

<div class="ui stackable grid">
  <section id="keynote" class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Keynote Speakers</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered">
        <?php $app->render('Partials/keynote.php'); ?>
      </div>
    </div>
  </section>
</div>

<div id="top-schedule" class="ui stackable grid">
  <section class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Schedule</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered">
        <?php $app->render('Partials/time-table.php'); ?>
      </div>
    </div>
  </section>
</div>

<?php $app->render('Partials/organizers.php'); ?>

<div class="ui stackable grid">
  <section id="collocated-events" class="twelve wide column centered">
    <h2 class="ui horizontal inverted divider header" style="color:black">Co-located Events</h2>
    <div class="ui stackable grid detail">
      <div class="seven wide column centered" style="text-align:center">
      <a class="sui" href="http://sui-symposium.org/" target="_blank">
        <img src="<?php echo BASE_PATH; ?>/lib/img/sui.svg" alt="" width="180px">
        <h1>SUI: Spatial User Interaction 2016</h1>
        <p class="text"><i class="fa fa-fw fa-link"></i>http://sui-symposium.org/</p>
      </a>
      </div>

      <div class="seven wide column centered" style="text-align:center">
      <a class="sui" href="https://utopenlab.github.io/" target="_blank">
        <img src="<?php echo BASE_PATH; ?>/lib/img/open-labs.svg" alt="" width="130px" style="margin: 15px 0">
        <h1>The University of Tokyo Open Labs</h1>
        <p class="text"><i class="fa fa-fw fa-link"></i>https://utopenlab.github.io/</p>
      </a>
      </div>
    </div>
  </section>
</div>


<div class="ui stackable grid">
  <section id="sponsors" class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Sponsors</h2>
    <div class="ui stackable grid detail sponsors">
      <a class="five wide column centered" href="http://sigchi.org" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/sigchi.png');background-size:220px;"></a>
      <a class="five wide column centered" href="http://www.acm.org/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/acm.png');background-size:240px;"></a>
      <a class="five wide column centered" href="http://www.siggraph.org/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/siggraph.png');background-size:150px;"></a>
    </div>


    <h2 class="ui horizontal divider header" style="color:#88847b; margin-top:80px">Platinum Sponsors</h2>

    <div class="ui stackable grid detail sponsors">
      <a class="five wide column centered" href="http://www.autodesk.com/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/autodesk.png');background-size:270px;"></a>
      <a class="five wide column centered" href="http://recruit.ai/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/recruit.png');background-size:270px;"></a>
    </div>

    <h2 class="ui horizontal divider header" style="color:#D4AF37; margin-top:80px">Gold Sponsors</h2>

    <div class="ui stackable grid detail sponsors">
      <a class="five wide column centered" href="http://www.google.com/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/google2.png');background-size:200px;"></a>
      <a class="five wide column centered" href="http://www.microsoft.com/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/microsoft.png');background-size:240px;"></a>
    </div>

    <h2 class="ui horizontal divider header" style="color:#a9a59f; margin-top:80px">Silver Sponsors</h2>

    <div class="ui stackable grid detail sponsors">
      <a class="five wide column centered" href="http://www.fxpal.com/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/fxpal.png');background-size:110px;"></a>
      <a class="five wide column centered" href="http://www.adobe.com/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/adobe.png');background-size:60px;"></a>
      <a class="five wide column centered" href="https://www.sonycsl.co.jp/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/sony-csl.png');background-size:140px;"></a>
      <a class="five wide column centered" href="http://innolab.jp/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/innolab.png');background-size:170px;"></a>

    </div>


    <h2 class="ui horizontal divider header" style="color:#d7995b; margin-top:80px">Bronze Sponsors</h2>
    <div class="ui stackable grid detail sponsors">
      <a class="five wide column centered" href="http://www.sensel.com/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/sensel.png');background-size:100px;"></a>
      <a class="five wide column centered" href="https://unity3d.com/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/unity.png');background-size:120px;"></a>
      <a class="five wide column centered" href="http://www.yahoo.co.jp/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/yahoo.png');background-size:140px;"></a>
      <a class="five wide column centered" href="http://www.ux-xu.com/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/yukai.png');background-size:130px;"></a>
      <a class="five wide column centered" href="http://www.wacom.com/ja-jp" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/wacom.png');background-size:130px;"></a>
      <a class="five wide column centered" href="http://www.dgp.toronto.edu" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/dgp.png');background-size:130px;"></a>
      <a class="five wide column centered" href="http://www.tactuallabs.com" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/tactual.png');background-size:40px;"></a>
      <a class="five wide column centered" href="http://synaptics.com" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/synaptics.png');background-size:150px;"></a>
      <a class="five wide column centered" href="https://www.oculus.com/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/oculus.png');background-size:180px;"></a>
    </div>

    <h2 class="ui horizontal divider header" style="color:#555; margin-top:80px">Institution Supporters</h2>
    <div class="ui stackable grid detail sponsors">
      <a class="five wide column centered" href="http://www.nict.go.jp/en/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/nict.png');background-size:100px;"></a>
      <a class="five wide column centered" href="http://www.kayamorif.or.jp/" target="_blank" style="background-image: url('<?php echo BASE_PATH; ?>/lib/img/sponsors/kayamori.png');background-size:100px;"></a>
    </div>

  </section>
</div>


<section id="footer-cover">
  <h2 class="text text-spaced text-center">Join the Conversation</h2>
  <div class="ui stackable grid detail" style="margin-top:20px">
    <div class="one wide column"></div>
    <div class="seven wide column centered">
      <a class="twitter-timeline" href="https://twitter.com/ACMUIST" data-widget-id="516808131494424576" height="400">Tweets by @ACMUIST</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <div class="seven wide column centered">
      <div class="fb-page"
        data-href="https://www.facebook.com/ACMUIST"
        data-width="800"
        data-height="400"
        data-adapt-container-width="true"
        data-hide-cover="false"
        data-small-header="false"
        data-show-facepile="true"
        data-show-posts="true"
        data-tabs="timeline"
      ></div>
      <style>
        #fb-root { display: none; }
        .fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] { width: 100% !important; }
      </style>
    </div>
    <div class="one wide column"></div>


    <div class="sixteen wide column centered">
      <a class="ui circular facebook icon button" href="https://www.facebook.com/ACMUIST" target="_blank">
        <i class="facebook icon"></i>
      </a>
      <a class="ui circular twitter icon button" href="https://twitter.com/ACMUIST" target="_blank">
        <i class="twitter icon"></i>
      </a>
      <a class="ui circular youtube icon button" href="https://www.youtube.com/user/acmsigchi/playlists?view=50&sort=dd&shelf_id=6" target="_blank">
        <i class="youtube play icon"></i>
      </a>
      <a class="ui circular pink icon button" href="https://www.flickr.com/photos/acmuist/" target="_blank">
        <i class="photo icon"></i>
      </a>
    </div>

  </div>
  <!-- <a href="archive"><h2 class="topic">Past UIST Conferences</h2></a> -->
</section>
