<?php

$app = new Application();


$app->get('/', function () {
    return 'Hello World';
});

$app->run();


