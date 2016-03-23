<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <?php
    if (isset($title)) {
      $title = $title . " - UIST 2016: 29th ACM User Interface Software and Technology Symposium";
    } else {
      $title = "UIST 2016: 29th ACM User Interface Software and Technology Symposium";
    }
    $description = "The ACM Symposium on User Interface Software and Technology (UIST) is the premier forum for innovations in human-computer interfaces. Sponsored by ACM special interest groups on computer-human interaction (SIGCHI) and computer graphics (SIGGRAPH), UIST brings together people from diverse areas including graphical & web user interfaces, tangible & ubiquitous computing, virtual & augmented reality, multimedia, new input & output devices, and CSCW. The intimate size and intensive program make UIST an ideal opportunity to exchange research results and ideas. Join us in Tokyo!"
    ?>
    <title><?php echo $title ?></title>
    <meta property="og:type" content="website">
    <meta property="og:title" content='<?php echo $title ?>'>
    <meta property="og:image" content='<?php echo BASE_PATH; ?>/lib/img/cover.png'>
    <!-- <meta property="og:url" content="http://uist.acm.org/uist2016/"> -->
    <meta property="og:description" content="<?php echo $description ?>">
    <meta property="og:site_name" content="UIST 2016">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@acmuist">
    <meta name="twitter:creator" content="@acmuist">
    <!-- <meta property="og:url" content=""> -->
    <meta property="og:title" content="<?php echo $title ?>">
    <meta property="og:description" content="<?php echo $description ?>">
    <meta property="og:image" content='<?php echo BASE_PATH; ?>/lib/img/cover.png'>

    <link rel="icon" type="image/png" href='<?php echo BASE_PATH; ?>/lib/img/icon-acm.gif'>
    <link rel='stylesheet' type='text/css' href='<?php echo BASE_PATH; ?>/bower_components/semantic-ui/dist/semantic.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo BASE_PATH; ?>/bower_components/fontawesome/css/font-awesome.css' />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">
    <link rel='stylesheet' type='text/css' href='<?php echo BASE_PATH; ?>/lib/css/style.css' />
    <script type='text/javascript' src="<?php echo BASE_PATH; ?>/bower_components/jquery/dist/jquery.js"></script>
    <script type='text/javascript' src="<?php echo BASE_PATH; ?>/bower_components/semantic-ui/dist/semantic.js"></script>
    <script type='text/javascript' src="<?php echo BASE_PATH; ?>/lib/js/site.js"></script>
  </head>
  <body data-category=<?php echo $category?>>

    <div class="ui sidebar vertical inverted menu">
      <?php $app->render("Partials/menu.php"); ?>
    </div>
    <div class="pusher">
      <?php if ($category == "index") { $app->render('Partials/cover.php'); } else { $app->render('Partials/header.php'); } ?>
      <div class='container'>
        <?php $app->render($view); ?>
      </div>
      <?php $app->render('Partials/footer.php'); ?>
    </div>
  </body>
</html>