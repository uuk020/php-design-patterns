<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/22
 * Time: 22:36
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Observer;

/**
 * 主题接口
 * @package Patterns\Behavioral\Observer
 */
interface Subject
{
    /**
     * 增加观察者
     *
     * @param \Patterns\Behavioral\Observer\Observer $observer
     */
    public function attach(Observer $observer): void;

    /**
     * 删除观察者
     *
     * @param \Patterns\Behavioral\Observer\Observer $observer
     */
    public function detach(Observer $observer): void;

    /**
     *  通知观察者
     */
    public function notify(): void;
}