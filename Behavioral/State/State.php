<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/27
 * Time: 23:14
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\State;


abstract class State
{
    abstract function handle(Person $person);
}