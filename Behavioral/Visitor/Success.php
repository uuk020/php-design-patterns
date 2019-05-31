<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/31
 * Time: 22:57
 */
declare(strict_types  = 1);
namespace Patterns\Behavioral\Visitor;

/**
 * Class Success
 * @package Patterns\Behavioral\Visitor
 */
class Success extends State
{
    /**
     * 面对成功男人的反应
     *
     * @param \Patterns\Behavioral\Visitor\Man $elementA
     * @return mixed|string
     */
    public function getManConclusion(Man $elementA)
    {
        return '每一个成功的' . $elementA->getName() . '背后多半有一个伟大的女人';
    }

    /**
     * 面对成功女人的反应
     *
     * @param \Patterns\Behavioral\Visitor\Woman $elementB
     * @return mixed|string
     */
    public function getWomanConclusion(Woman $elementB)
    {
        return '每一个成功的' . $elementB->getName() . '背后大多有一个不成功的男人';
    }
}