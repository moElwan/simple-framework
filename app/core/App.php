<?php
/**
 * App
 *
 * @copyright Copyright © 2019. All rights reserved.
 * @author    mesee1@gmail.com
 */

class App
{
    private $controllerName = 'Home';
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        if (isset($url[0]) && file_exists($this->baseDir() . '/Controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controllerName = ucfirst($url[0]);
            unset($url[0]);
        }
        require_once $this->baseDir() . '/Controllers/' . $this->controllerName . '.php';
        $controller = new $this->controllerName;

        if (isset($url[1]) && method_exists($controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$controller, $this->method], $this->params);

    }

    /**
     * get url as an array. ['ControllerName', 'FunctionName', ....params ]
     *
     * @return array
     */
    private function parseUrl()
    {
        $url = [];
        if (isset($_GET['url'])) {
            $url = explode('/', rtrim($_GET['url']));
        }
        return $url;
    }

    /**
     * @return string
     */
    public function baseDir()
    {
        return dirname(__DIR__);
    }
}