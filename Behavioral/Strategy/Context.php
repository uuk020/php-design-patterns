<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/26
 * Time: 22:33
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Strategy;


/**
 * 环境存储策略类
 * @package Patterns\Behavioral\Strategy
 */
class Context
{
    /**
     * @var \Patterns\Behavioral\Strategy\Strategy
     */
    private $strategy;

    /**
     * Context constructor.
     * @param \Patterns\Behavioral\Strategy\Strategy $strategy
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * 计算金额
     *
     * @param float $price
     * @return float
     */
    public function quote(float $price): float
    {
        return $this->strategy->calc($price);
    }
}