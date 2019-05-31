<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/31
 * Time: 22:51
 */
declare(strict_types = 1);
namespace Patterns\Behavioral\Visitor;

/**
 * Class Person
 * @package Patterns\Behavioral\Visitor
 */
abstract class Person
{
    /**
     * 访问
     *
     * @param \Patterns\Behavioral\Visitor\State $visitor
     * @return mixed
     */
    abstract public function accept(State $visitor);
}