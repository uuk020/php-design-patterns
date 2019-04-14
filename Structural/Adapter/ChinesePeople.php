<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/14
 * Time: 22:45
 */

declare(strict_types = 1);
namespace Patterns\Structural\Adapter;

/**
 * 不懂英文的中国人
 * @package Patterns\Structural\Adapter
 */
class ChinesePeople
{
    /**
     * 说话
     *
     * @return string
     */
    public function sayChinese(): string
    {
        return '你好';
    }
}