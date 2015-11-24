
<div class="ui grid">
  <section id="update" class="ten wide column centered">
    <div class="ui icon message">
      <i class="fa fa-bell-o icon"></i>
      <div class="content">
        <div class="text text-bold">
          Updates
        </div>
        <ul class="list text">
          <li>UIST 2016 website is now available.</li>
        </ul>
      </div>
    </div>
  </section>
</div>

<div class="ui grid">
  <section id="about" class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Welcome</h2>
    <div class="ui grid detail">
      <div class="fourteen wide column centered">
        <p class="about text">
          The ACM Symposium on User Interface Software and Technology (UIST) is the premier forum for innovations in human-computer interfaces. Sponsored by ACM special interest groups on computer-human interaction (SIGCHI) and computer graphics (SIGGRAPH), UIST brings together people from diverse areas including graphical & web user interfaces, tangible & ubiquitous computing, virtual & augmented reality, multimedia, new input & output devices, and CSCW. The intimate size and intensive program make UIST an ideal opportunity to exchange research results and ideas. Join us in Tokyo!
        </p>
      </div>
    </div>
  </section>
</div>

<div class="ui grid background-grid">
  <section id="deadline" class="twelve wide column centered">
    <h2 class="ui horizontal inverted divider header">Deadlines</h2>
    <div class="ui grid detail">
      <div class="fourteen wide column centered">
        <table class="ui fixed single line table">
          <thead class="text">
            <tr>
              <th>Name</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody class="text">
            <tr>
              <td>Papers & Notes</td>
              <td>TBA</td>
            </tr>
            <tr>
              <td>Posters & Demos</td>
              <td>TBA</td>
            </tr>
            <tr>
              <td>Doctoral Symposium</td>
              <td>TBA</td>
            </tr>
            <tr>
              <td>Student Volunteers</td>
              <td>TBA</td>
            </tr>
            <tr>
              <td>Student Innovation Contest</td>
              <td>TBA</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

<?php $app->render('Partials/organizers.php'); ?>

<div class="ui grid">
  <section id="sponsors" class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Sponsors</h2>
    <div class="ui stackable grid detail">
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

