<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/26
 * Time: 22:28
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Strategy;


interface Strategy
{
    public function calc(float $price);
}