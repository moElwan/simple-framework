<?php
/**
 * Controller
 *
 * @copyright Copyright © 2019 BestResponseMedia. All rights reserved.
 * @author    mesee1@gmail.com
 */

class Controller
{
    /**
     * @param $name
     * @return null
     */
    protected function model($name)
    {
        $modelFilePath = $this->baseDir() . '/Models/' . $name . '.php';
        if (file_exists($modelFilePath)) {
            require_once $modelFilePath;
            return new $name;
        } else {
            return null;
        }
    }

    /**
     * @return string
     */
    public function baseDir()
    {
        return dirname(__DIR__);
    }
}