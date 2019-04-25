<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/25
 * Time: 22:55
 */

declare(strict_types = 1);
namespace Patterns\Structural\Proxy;

/**
 * 代理
 * @package Patterns\Structural\Proxy
 */
class Proxy implements Subject
{
    /**
     * 真实主题实例
     *
     * @var \Patterns\Structural\Proxy\RealSubject
     */
    private $realSubject;

    /**
     * Proxy constructor.
     */
    public function __construct()
    {
        $this->realSubject = new RealSubject();
    }

    /**
     * 请求
     *
     * @return string
     */
    public function request(): string
    {
        return '向代理发送请求->'. $this->realSubject->request() . '->代理响应请求';
    }
}