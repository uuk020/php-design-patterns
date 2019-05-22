<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/22
 * Time: 22:50
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Observer;


/**
 * 电脑
 * @package Patterns\Behavioral\Observer
 */
class Computer implements Subject
{
    /**
     * 价格
     *
     * @var int
     */
    private $price = 8000;

    /**
     * 观察者列表
     *
     * @var array
     */
    private $observerList = [];

    /**
     * 增加观察者
     *
     * @param \Patterns\Behavioral\Observer\Observer $observer
     */
    public function attach(Observer $observer): void
    {
        $this->observerList[] = $observer;
    }

    /**
     * 移除观察者
     *
     * @param \Patterns\Behavioral\Observer\Observer $observer
     */
    public function detach(Observer $observer): void
    {
        $key = array_search($observer, $this->observerList, true);
        if ($key) {
            unset($this->observerList[$key]);
        }
    }

    /**
     * 设置价格
     *
     * @param int $price
     * @return \Patterns\Behavioral\Observer\Computer
     */
    public function setPrice(int $price): Computer
    {
        $this->price = $price;
        return $this;
    }

    /**
     * 获取价格
     *
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * 通知
     */
    public function notify(): void
    {
        foreach ($this->observerList as $observer) {
            $observer->update($this);
        }
    }
}