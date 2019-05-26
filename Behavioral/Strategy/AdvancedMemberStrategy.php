<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/26
 * Time: 22:32
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Strategy;


class AdvancedMemberStrategy implements Strategy
{
    public function calc(float $price)
    {
        return $price * 0.8;
    }
}