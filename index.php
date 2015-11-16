<?php
/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader.
 *
 * If you are using Composer, you can skip this step.
 */

require "vendor/autoload.php";
// require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */

/* Windows uses backslash, others use forward slash */
$delimiter = '';

if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
    $delimiter = "\\";
} else {
    $delimiter = "/";
}

$path = explode($delimiter, dirname(__FILE__));
$path = "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']."/".array_pop($path);

define("BASE_PATH", "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']);
// define("BASE_PATH", "http://uist.hosting.acm.org/uist2016");
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

$app->hook('slim.before', function () use ($app) {
    $app->view()->appendData(array('baseUrl' => 'http://uist.hosting.acm.org/uist2016'));
});

require './Slim/Config/routes.php';

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, `Slim::patch`, and `Slim::delete`
 * is an anonymous function.
 */

// POST route
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
