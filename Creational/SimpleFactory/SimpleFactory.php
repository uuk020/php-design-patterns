<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 15:36
 */
declare(strict_types = 1);
namespace Patterns\Creational\SimpleFactory;

/**
 * 简单工厂
 *
 * @package Patterns\Creational\SimpleFactory
 */
class SimpleFactory
{
    /**
     * 创建运算类
     *
     * @param string $operate
     * @return \Patterns\Creational\SimpleFactory\Operate
     * @throws \Exception
     */
    public static function create(string $operate = '+'): Operate
    {
        switch ($operate) {
            case '+':
                $result = new OperateAdd();
                break;
            case '-':
                $result = new OperateSub();
                break;
            default:
                throw new \Exception('运算类不存在');
                break;
        }
        return $result;
    }
}