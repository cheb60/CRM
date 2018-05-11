<?php

/*
|--------------------------------------------------------------------------
| Create a new instance of the Application
|--------------------------------------------------------------------------
|
*/

$app = JayJay\Classes\Application::getInstance();

/*
|--------------------------------------------------------------------------
| Request
|--------------------------------------------------------------------------
|
*/

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

/*
|--------------------------------------------------------------------------
| Response
|--------------------------------------------------------------------------
|
*/
$response = $app->httpKernel->handle($request);
$response->send();
$app->httpKernel->terminate($request, $response);
