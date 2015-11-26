<?php
require "vendor/autoload.php";

\Slim\Slim::registerAutoloader();

$delimiter = '';

if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
  $delimiter = "\\";
} else {
  $delimiter = "/";
}

$path = explode($delimiter, dirname(__FILE__));
$path = "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']."/".array_pop($path);

if ($_SERVER['SERVER_NAME'] == 'uist.acm.org') {
  define("BASE_PATH", "http://uist.acm.org/uist2016");
} else {
  define("BASE_PATH", "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']);
}

$app = new \Slim\Slim();
$app->get('/', function () {
  echo 'Hello World';
});
$app->get('/hoge', function () {
  echo 'Hogee';
});

$app = new \Slim\Slim(array(
  'mode' => 'development',
  'debug' => true,
  'templates.path' => __DIR__.'/Slim/Views'
  ));

if ($_SERVER['SERVER_NAME'] == 'uist-2016.herokuapp.com') {
  $app->add(new \Slim\Middleware\HttpBasicAuthentication([
    "secure" => false,
    "users" => [
    "admin" => "uist2016"
    ]
    ]));
}
*/

$app->hook('slim.before', function () use ($app) {
  $app->view()->appendData(array('baseUrl' => 'http://uist.hosting.acm.org/uist2016'));
});

require './Slim/Config/routes.php';

$app->run();
