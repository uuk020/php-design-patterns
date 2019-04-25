<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/25
 * Time: 22:59
 */

namespace Patterns\Structural\Proxy;

use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testProxy()
    {
        $proxy = new Proxy();
        $this->assertEquals('向代理发送请求->Google 搜索设计模式->代理响应请求', $proxy->request());
    }
}
