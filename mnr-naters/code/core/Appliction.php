<?php

namespace ots\core;

class Application
{
    public Router $router;

    function __construct()
    {
        $this->router = new Router();
    }

}