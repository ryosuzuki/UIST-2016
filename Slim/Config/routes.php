<?php
$app->get('/', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "home.php", "category" => "index"));
});

$app->get('/submission', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "submission.php", "category" => "submission", "title" => "Submission"));
});

$app->get('/attending', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "attending.php", "category" => "attending", "title" => "Attending"));
});

/*
$app->get('/registration', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "registration.php", "category" => "registration", "title" => "Registration"));
});
*/
$app->get('/sponsors', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "sponsors.php", "category" => "sponsors", "title" => "Sponsors"));
});

$app->get('/updates', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "updates.php", "category" => "updates"));
});

$app->get('/organizers', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "organizers.php", "category" => "organizers", "title" => "Organizers"));
});

$app->get('/call', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-papers.php", "category" => "call"));
});
$app->get('/papers', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-papers.php", "category" => "call", "title" => "Papers & Notes"));
});
$app->get('/demos', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-demos.php", "category" => "call", "title" => "Demos"));
});
$app->get('/volunteers', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-sv.php", "category" => "call", "title" => "Student Volunteers"));
});
$app->get('/posters', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-posters.php", "category" => "call", "title" => "Posters"));
});
$app->get('/doctoral', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "call/call-doctoral.php", "category" => "call", "title" => "Doctoral Symposium"));
});

$app->get('/author-guide', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "call/author-guide.php", "category" => "call", "title" => "Author's Guide"));
});
$app->get('/author-advice', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "call/author-advice.php", "category" => "call", "title" => "Advice for Submission"));
});
$app->get('/video-guide', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "call/video-guide.php", "category" => "call", "title" => "Video Guide"));
});

$app->get('/video-previews', function () use ($app) {
  $app->render('Layouts/main.php', array("app" => $app, "view" => "call/video-previews.php", "category" => "call", "title" => "Video Previews"));
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