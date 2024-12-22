<?php

namespace app\controller;

use app\core\View;

class HomeController extends View
{
    public function index()
    {
        $this->view('home');
    }
}