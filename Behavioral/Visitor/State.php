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
 * Class State
 * @package Patterns\Behavioral\Visitor
 */
abstract class State
{
    /**
     * 面对不同状态男人的反应
     *
     * @param \Patterns\Behavioral\Visitor\Man $elementA
     * @return mixed
     */
    abstract public function getManConclusion(Man $elementA);

    /**
     * 面对不同状态女人的反应
     *
     * @param \Patterns\Behavioral\Visitor\Woman $elementB
     * @return mixed
     */
    abstract public function getWomanConclusion(Woman $elementB);
}