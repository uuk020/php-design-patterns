<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/19
 * Time: 21:50
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Mediator;

/**
 * Class China
 * @package Patterns\Behavioral\Mediator
 */
class China extends Country
{
    /**
     * @param string $message
     */
    public function declare(string $message)
    {
        return $this->mediator->declare($message, $this);
    }

    /**
     * @param string $message
     * @return string
     */
    public function getMessage(string $message):string
    {
        return $message;
    }
}