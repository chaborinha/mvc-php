<?php

namespace app\core;

class Router
{
    public function dispatch($url)
    {
        $url = explode('/', $url);

        ## verifica se o primeiro indice da url possui um nome de um contralador, caso nao tenha 'HomeController' será chamado.
        $controllerName = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'HomeController';
        ## verifica se o segundo indice da url possui um nome de um método, caso não tenha 'index' será chamado.
        $methodName = isset($url[1]) ? $url[1] : 'index';
        ## pegando páramtros da URL.
        $params = array_slice($url, 2);

        ## pegando a classe.
        $controllerClass = "app\\controller\\$controllerName";
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            if (method_exists($controller, $methodName)) {
                call_user_func([$controller, $methodName], $params);
            } else {
                echo "Método {$methodName} não foi encontrado";
            }
        } else {
            echo "Controller {$controllerName} não foi encontrado";
        }
    }
}