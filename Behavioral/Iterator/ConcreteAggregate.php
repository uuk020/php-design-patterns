<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/8
 * Time: 23:30
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Iterator;


/**
 * Class ConcreteAggregate
 * @package Patterns\Behavioral\Iterator
 */
class ConcreteAggregate extends Aggregate
{

    /**
     * @var array
     */
    private $items = [];

    /**
     * 总数
     *
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * 新增
     *
     * @param string $name
     */
    public function add(string $name)
    {
        $this->items[] = $name;
    }

    /**
     * 获取元素
     *
     * @param int $current
     * @return string
     */
    public function get(int $current): string
    {
        return $this->items[$current];
    }

    /**
     * 创建具体迭代器
     *
     * @return \Patterns\Behavioral\Iterator\Iterator
     */
    public function createIterator(): Iterator
    {
        return new ConcreteIterator($this);
    }
}