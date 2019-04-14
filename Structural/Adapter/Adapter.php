<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/14
 * Time: 22:23
 */

declare(strict_types = 1);
namespace Patterns\Structural\Adapter;

/**
 * 翻译
 * @package Patterns\Structural\Adapter
 */
class Adapter implements Person
{
    /**
     * 适配者
     *
     * @var \Patterns\Structural\Adapter\ChinesePeople
     */
    private $adaptee;

    /**
     * Adapter constructor.
     * @param \Patterns\Structural\Adapter\ChinesePeople $adaptee
     */
    public function __construct(ChinesePeople $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * 翻译对话
     *
     * @return string
     */
    public function say(): string
    {
        return $this->adaptee->sayChinese();
    }
}