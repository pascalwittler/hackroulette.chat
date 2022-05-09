<?php

class Router
{
    public static function route()
    {
        $request_url = $_SERVER['REQUEST_URI'];

        $routes = [
            '/' => ['Http', 'error501'],
            '/chat' => ['Http', 'error501'],
        ];

        foreach ($routes as $route => $action) {
            $regular_expression = '~^' . $route . '/?$~i';

            if (!preg_match($regular_expression, $request_url)) {
                continue;
            }

            if (!is_callable($action)) {
                return call_user_func(['Http', 'error404']);
            }

            return call_user_func($action);
        }

        return call_user_func(['Http', 'error404']);
    }
}
