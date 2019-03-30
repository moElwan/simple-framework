<?php
/**
 * User
 *
 * @copyright Copyright © 2019. All rights reserved.
 * @author    mesee1@gmail.com
 */

class User
{
    private $name = '';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}