<?php

namespace Controllers;

use Controllers\BaseController;


class Main extends BaseController
{
    // =======================================================
    public function index()
    {
       echo $this->view('home');
    }
}