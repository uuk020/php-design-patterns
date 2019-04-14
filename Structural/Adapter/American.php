<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/14
 * Time: 22:43
 */

declare(strict_types = 1);
namespace Patterns\Structural\Adapter;

/**
 * 美国人
 * @package Patterns\Structural\Adapter
 */
class American implements Person
{
    /**
     * 说话
     *
     * @return string
     */
    public function say(): string
    {
        return 'hello';
    }
}