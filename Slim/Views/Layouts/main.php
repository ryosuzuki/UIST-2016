<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UIST 2016: 28th ACM UIST Symposium</title>
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
    <?php
      /* Render our header */
      // $app->render('Partials/header.php');
      /* Render the banner */
      $app->render("Partials/banner.php");
    ?>
    <div class='container'>
      <?php
        /* Render our passed in view name */
        $app->render($view);

        /* Render the sponsors */
        // $app->render('Partials/sponsors.php');
      ?>
    </div>
    <?php
      /* Render the footer */
      $app->render('Partials/footer.php');
    ?>
  </body>
</html>