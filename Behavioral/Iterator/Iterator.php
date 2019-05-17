<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/8
 * Time: 23:19
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Iterator;


/**
 * 迭代器接口
 * @package Patterns\Behavioral\Iterator
 */
interface Iterator
{
    /**
     * 第一个元素
     *
     * @return mixed
     */
    public function first();

    /**
     * 下一个元素
     *
     * @return mixed
     */
    public function next();

    /**
     * 是否完成
     *
     * @return mixed
     */
    public function isDone();

    /**
     * 当前元素
     *
     * @return mixed
     */
    public function current();
}