<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/26
 * Time: 22:31
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Strategy;


/**
 * 中级会员
 * @package Patterns\Behavioral\Strategy
 */
class IntermediateMemberStrategy implements Strategy
{
    public function calc(float $price)
    {
        return $price * 0.9;
    }
}