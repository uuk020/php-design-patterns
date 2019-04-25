<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/25
 * Time: 22:53
 */

declare(strict_types = 1);
namespace Patterns\Structural\Proxy;

/**
 * 真实主题
 * @package Patterns\Structural\Proxy
 */
class RealSubject implements Subject
{
    /**
     * 请求
     *
     * @return string
     */
    public function request(): string
    {
        return 'Google 搜索设计模式';
    }
}