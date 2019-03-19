<?php
/**
 * App
 *
 * @copyright Copyright © 2019 BestResponseMedia. All rights reserved.
 * @author    mesee1@gmail.com
 */

class App
{
    public function __construct()
    {
        $this->parseUrl();
    }

    private function parseUrl()
    {
        $url = [];
        if (isset($_GET['url'])) {
            $url = explode('/', rtrim($_GET['url']));
        }
        return $url;
    }
}