<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 15:51
 */
declare(strict_types = 1);
namespace Patterns\Creational\SimpleFactory;

/**
 * 减法运算类
 *
 * @package Patterns\Creational\SimpleFactory
 */
class OperateSub implements Operate
{
    /**
     * 减数1
     *
     * @var float
     */
    private $number1 = 0;

    /**
     * 减数1
     *
     * @var float
     */
    private $number2 = 0;

    /**
     * 设置减数
     *
     * @param float $number1
     * @param float $number2
     */
    public function setNumber(float $number1, float $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    /**
     * 减法
     *
     * @return float
     */
    public function calc(): float
    {
        return $this->number1 + $this->number2;
    }
}