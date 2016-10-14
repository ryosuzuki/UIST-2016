<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>/lib/web_guide/css/confapp.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_PATH; ?>/lib/web_guide/js/confapp.min.js"></script>
  </head>
  <body>
    <div class='container' id='program'></div>
    <div class='footer container'>
      <div class='row'>
        <div class="twelve columns">
          Program Guide by Electronic Conference Services | <a href='https://github.com/confapp/web_guide' target='_blank'>Fork us on GitHub</a>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    $(function() {
      $('#program').caWebProgram({
        databaseURL: "<?php echo BASE_PATH; ?>/lib/web_guide/uist_2016_29.json",
        imageDirectory: "<?php echo BASE_PATH; ?>/lib/web_guide/images"
      });
    });
  </script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-73175108-1', 'auto');
    ga('send', 'pageview');
  </script>
</html>