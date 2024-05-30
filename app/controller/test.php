<?php

namespace controller;

use config\View;

require_once realpath("./vendor/autoload.php");

class test extends View
{
    public function index()    {

    }
}

$controlador = new test();