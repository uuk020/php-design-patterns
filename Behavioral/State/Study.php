<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/27
 * Time: 23:22
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\State;


class Study extends State
{
    public function handle(Person $person)
    {
        return '学习';
    }
}