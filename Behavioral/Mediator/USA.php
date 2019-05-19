<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/19
 * Time: 21:46
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Mediator;

/**
 * 美国
 * @package Patterns\Behavioral\Mediator
 */
class USA extends Country
{
    public function declare(string $message)
    {
        return $this->mediator->declare($message, $this);
    }

    public function getMessage(string $message): string
    {
        return $message;
    }
}