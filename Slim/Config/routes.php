<?php

    /* Our routes go here. You can use the primary REST verbs (GET, POST, PUSH, DELETE)
       "category" is the menu anchor that should be underlined. Make sure it matches */

    $app->get('/submission', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "submission.php", "category" => "submission"));
    });

    $app->get('/attending', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "attending.php", "category" => "attending"));
    });

    $app->get('/registration', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "registration.php", "category" => "registration"));
    });

    $app->get('/sponsors', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "sponsors.php", "category" => "sponsors"));
    });

    $app->get('/updates', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "updates.php", "category" => "updates"));
    });

    $app->get('/organizers', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "organizers.php", "category" => "organizers"));
    });

    $app->get('/call', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call.php", "category" => "call"));
    });
    $app->get('/papers', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-papers.php", "category" => "call"));
    });
    $app->get('/demos', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-demos.php", "category" => "call"));
    });
    $app->get('/volunteers', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-sv.php", "category" => "call"));
    });
    $app->get('/posters', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-posters.php", "category" => "call"));
    });
    $app->get('/doctoral', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-doctoral.php", "category" => "call"));
    });

    $app->get('/author-guide', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/author-guide.php", "category" => "call"));
    });
    $app->get('/author-advice', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/author-advice.php", "category" => "call"));
    });
    $app->get('/video-guide', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/video-guide.php", "category" => "call"));
    });

    $app->get('/video-previews', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/video-previews.php", "category" => "call"));
    });
    $app->get('/video-previews-detail', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/video-previews-detail.php", "category" => "call"));
    });

    $app->get('/contest', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-sic.php", "category" => "call"));
    });


    $app->get('/dates', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "dates.php", "category" => "dates"));
    });

    $app->get('/people/:name', function ($id) use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "Bios/$id.php",  "category" => "people"));
    });

   $app->get('/venue', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "venue.php",  "category" => "venue"));
    });
   $app->get('/sponsorship', function () use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "sponsors.php",  "category" => "sponsors"));
    });
   $app->get('/archive', function() use ($app) {
        $app->render('Layouts/main.php', array("app" => $app, "view" => "archive.php", "category" => "archive"));
   });