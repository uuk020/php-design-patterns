<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/22
 * Time: 23:12
 */
declare(strict_types = 1);
namespace Patterns\Behavioral\Observer;

/**
 * 观察者1
 * @package Patterns\Behavioral\Observer
 */
class XiaoLi implements Observer
{
    private $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function update(): string
    {
        return '你关注电脑价格: ' . $this->computer->getPrice();
    }
}