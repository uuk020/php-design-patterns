<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/20
 * Time: 22:34
 */

declare(strict_types = 1);
namespace Patterns\Structural\Decorator;

/**
 * 装饰抽象类
 * @package Patterns\Structural\Decorator
 */
abstract class Decorator implements Component
{
    /**
     * 组成接口实例变量
     *
     * @var \Patterns\Structural\Decorator\Component
     */
    protected $component;

    /**
     * 设置组成接口实例
     *
     * @param \Patterns\Structural\Decorator\Component $component
     */
    public function setComponent(Component $component): void
    {
        $this->component = $component;
    }

    /**
     * 调用组成接口实例的operation
     */
    public function operation()
    {
        if (!is_null($this->component)) {
            return $this->component->operation();
        }
    }
}