<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/25
 * Time: 22:51
 */

declare(strict_types = 1);
namespace Patterns\Structural\Proxy;

/**
 * 抽象主题
 * @package Patterns\Structural\Proxy
 */
interface Subject
{
    /**
     * 请求
     *
     * @return string
     */
    public function request(): string;
}