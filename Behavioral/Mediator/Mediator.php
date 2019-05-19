<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/19
 * Time: 21:40
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Mediator;

abstract class Mediator
{
    abstract public function declare(string $message, Country $colleague);
}