<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/7
 * Time: 22:01
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Command;

/**
 * 接收者 - 厨师
 *
 * @package Patterns\Behavioral\Command
 */
class Receiver
{
    /**
     * 烤羊肉串
     *
     * @return string
     */
    public function bakeMutton(): string
    {
        return '烤羊肉串';
    }

    /**
     * 烤鸡翅
     *
     * @return string
     */
    public function bakeChickenWing(): string
    {
        return '烤鸡翅';
    }
}