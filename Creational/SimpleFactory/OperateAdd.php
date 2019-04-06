<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 15:39
 */
declare(strict_types = 1);
namespace Patterns\Creational\SimpleFactory;

/**
 * 加法运算类
 *
 * @package Patterns\Creational\SimpleFactory
 */
class OperateAdd implements Operate
{
    /**
     * 加数1
     *
     * @var float
     */
    private $number1 = 0;

    /**
     * 加数2
     *
     * @var float
     */
    private $number2 = 0;

    /**
     * 设置加数
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
     * 加法
     *
     * @return float
     */
    public function calc(): float
    {
        return $this->number1 + $this->number2;
    }
}