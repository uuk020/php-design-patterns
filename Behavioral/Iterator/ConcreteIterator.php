<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/8
 * Time: 23:24
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Iterator;

/**
 * 具体迭代器
 * @package Patterns\Behavioral\Iterator
 */
class ConcreteIterator implements Iterator
{
    /**
     * 具体聚集实例
     *
     * @var \Patterns\Behavioral\Iterator\ConcreteAggregate
     */
    private $aggregate;

    /**
     * 当前元素位置
     *
     * @var int
     */
    private $current = 0;


    /**
     * ConcreteIterator constructor.
     * @param \Patterns\Behavioral\Iterator\ConcreteAggregate $aggregate
     */
    public function __construct(ConcreteAggregate $aggregate)
    {
        $this->aggregate = $aggregate;
    }

    /**
     * 第一个元素
     *
     * @return mixed|string
     */
    public function first()
    {
        return $this->aggregate->get(0);
    }

    /**
     * 当前元素
     *
     * @return mixed|string
     */
    public function current()
    {
        return $this->aggregate->get($this->current);
    }

    /**
     * 是否结束
     *
     * @return bool|mixed
     */
    public function isDone()
    {
        return $this->current < $this->aggregate->count() ? true : false;
    }

    /**
     * 下一个元素
     *
     * @return mixed|string
     */
    public function next()
    {
        $res = $this->aggregate->get($this->current);
        $this->current++;
        return $res;
    }
}