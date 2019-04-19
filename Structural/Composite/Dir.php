<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/19
 * Time: 22:21
 */

declare(strict_types = 1);
namespace Patterns\Structural\Composite;


class Dir extends Component
{
    /**
     * 子节点实例数组
     *
     * @var array
     */
    protected $children = [];

    /**
     * 展示子节点
     *
     * @return string
     */
    public function display(): string
    {
        $nameStr = '目录: ' . $this->name;
        foreach ($this->children as $child) {
            $nameStr .=  '->' . $child->display();
        }
        return $nameStr;
    }

    /**
     * 添加子节点
     *
     * @param string                                   $key
     * @param \Patterns\Structural\Composite\Component $component
     */
    public function add(string $key, Component $component): void
    {
        $this->children[$key] = $component;
    }

    /**
     * 移除子节点
     *
     * @param string $key
     */
    public function remove(string $key): void
    {
        unset($this->children[$key]);
    }

    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->children;
    }
}