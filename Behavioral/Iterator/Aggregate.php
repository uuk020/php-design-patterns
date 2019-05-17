<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/8
 * Time: 23:22
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Iterator;

/**
 * 聚集抽象
 * @package Patterns\Behavioral\Iterator
 */
abstract class Aggregate
{
    /**
     * 创建迭代器
     *
     * @return \Patterns\Behavioral\Iterator\Iterator
     */
    abstract public function createIterator(): Iterator;
}