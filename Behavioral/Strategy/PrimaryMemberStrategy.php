<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/26
 * Time: 22:29
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Strategy;

/**
 * 初级会员
 * @package Patterns\Behavioral\Strategy
 */
class PrimaryMemberStrategy implements Strategy
{
    public function calc(float $price): float
    {
        return $price;
    }
}