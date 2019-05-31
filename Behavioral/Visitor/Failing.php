<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/31
 * Time: 23:01
 */
declare(strict_types = 1);
namespace Patterns\Behavioral\Visitor;

/**
 * Class Failing
 * @package Patterns\Behavioral\Visitor
 */
class Failing extends State
{
    /**
     * 面对失败男人的反应
     *
     * @param \Patterns\Behavioral\Visitor\Man $elementA
     * @return string
     */
    public function getManConclusion(Man $elementA)
    {
        return $elementA->getName() . '闷头喝酒, 谁也不用劝';
    }

    /**
     * 面对失败女人的反应
     *
     * @param \Patterns\Behavioral\Visitor\Woman $elementB
     * @return string
     */
    public function getWomanConclusion(Woman $elementB)
    {
        return $elementB->getName() . '疯狂购物';
    }
}