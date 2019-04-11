<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/11
 * Time: 22:58
 */

declare(strict_types = 1);
namespace Patterns\Creational\Singleton;

class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    private function __construct()
    {
        // Hide the constructor
    }

    private function __clone()
    {
        // Disable cloning
    }

    private function __wakeup()
    {
        // Disable unserialize
    }
}