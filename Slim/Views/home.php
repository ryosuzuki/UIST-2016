
<div id="update-grid" class="ui stackable grid">
  <section id="update" class="ten wide column centered">
    <div class="ui icon message">
      <i class="fa fa-bell-o icon"></i>
      <div class="content">
        <div class="text text-bold">
          Updates
        </div>
        <ul class="list text">
          <li><b>The UIST submission website</b> is now open:<br>
          <a href="http://precisionconference.com/~sigchi" target="_balnk">http://precisionconference.com/~sigchi</a>
          </li>
          <br>
          <li><b>Upcoming Important Dates:</b><br>
          <b>June 9-16, 2016</b>: The rebuttal period for <a href="http://uist.acm.org/uist2016/posters">Papers</a>
          <br>
          <b>July 7, 2016</b>: The deadline for <a href="http://uist.acm.org/uist2016/posters">Posters</a>
          <br>
          <b>July 7, 2016</b>: The deadline for <a href="http://uist.acm.org/uist2016/demos">Demos</a>
          <br>
          <b>July 7, 2016</b>: The deadline <a href="http://uist.acm.org/uist2016/doctoral">Doctoral Symposium</a>
          <br>
          <b>July 25, 2016</b>: The deadline <a href="http://uist.acm.org/uist2016/volunteers">Student Volunteers</a>
        </ul>
      </div>
    </div>
  </section>
</div>

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

<div class="ui stackable grid background-grid">
  <section id="deadline" class="twelve wide column centered">
    <h2 class="ui horizontal inverted divider header">Deadlines</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered">
        <?php $app->render('Partials/deadline.php'); ?>
      </div>
    </div>
  </section>
</div>

<?php $app->render('Partials/organizers.php'); ?>

<div class="ui stackable grid">
  <section id="deadline" class="twelve wide column centered">
    <h2 class="ui horizontal inverted divider header" style="color:black">Co-located Events</h2>
    <div class="ui stackable grid detail">
      <div class="fourteen wide column centered" style="text-align:center">
      <a class="sui" href="http://sui-symposium.org/" target="_blank">
        <img src="<?php echo BASE_PATH; ?>/lib/img/sui.svg" alt="" width="180px">
        <h1>SUI: Spatial User Interaction 2016</h1>
        <p class="text"><i class="fa fa-fw fa-link"></i>http://sui-symposium.org/</p>
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
  </section>
</div>

<section id="footer-cover">
  <h2 class="text text-spaced text-center">Join the Conversation</h2>
  <div class="ui stackable grid detail">
    <div class="eight wide column centered">
      <a class="twitter-timeline" href="https://twitter.com/ACMUIST" data-widget-id="516808131494424576" height="400">Tweets by @ACMUIST</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
  </div>
  <!-- <a href="archive"><h2 class="topic">Past UIST Conferences</h2></a> -->
</section>

