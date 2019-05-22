<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/22
 * Time: 22:39
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Observer;


/**
 * 观察者接口
 * @package Patterns\Behavioral\Observer
 */
interface Observer
{
    /**
     * 更新
     *
     */
    public function update();
}