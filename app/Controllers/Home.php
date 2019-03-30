<?php
/**
 * Home
 *
 * @copyright Copyright © 2019. All rights reserved.
 * @author    mesee1@gmail.com
 */

class Home extends Controller
{
    public function index()
    {
        $this->view('home/index', ['name' => 'Basel']);
    }

    public function name($newName)
    {
        if (!empty($newName)) {
            $user = $this->model('User');
            $user->setName($newName);
            echo '<h1>' . $user->getName() . '</h1>';
        }
    }
}