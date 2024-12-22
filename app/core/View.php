<?php

namespace app\core;

class View
{
    protected function view($view, $data = [])
    {
        require __DIR__ . '/../views/' . $view . '.php';
    }
}