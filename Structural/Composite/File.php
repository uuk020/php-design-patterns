<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/19
 * Time: 22:14
 */

declare(strict_types = 1);
namespace Patterns\Structural\Composite;


class File extends Component
{
    /**
     * 展示文件
     *
     * @return string
     */
    public function display(): string
    {
        return '文件名: ' . $this->name;
    }

    /**
     * 添加子节点
     *
     * @param string                                   $key
     * @param \Patterns\Structural\Composite\Component $component
     * @throws \Exception
     */
    public function add(string $key, Component $component): void
    {
        throw new \Exception('无法添加子节点');
    }

    /**
     * 移除子节点
     *
     * @param string $key
     * @throws \Exception
     */
    public function remove(string $key): void
    {
        throw new \Exception('无法移除子节点');
    }
}