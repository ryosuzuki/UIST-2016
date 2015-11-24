<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>UIST 2016: 29th ACM UIST Symposium</title>
    <link rel="icon" type="image/png" href='<?php echo BASE_PATH; ?>/lib/img/icon-acm.gif'>
    <link rel='stylesheet' type='text/css' href='<?php echo BASE_PATH; ?>/bower_components/semantic-ui/dist/semantic.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo BASE_PATH; ?>/bower_components/fontawesome/css/font-awesome.css' />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">
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