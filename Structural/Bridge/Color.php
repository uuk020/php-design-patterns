<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/15
 * Time: 23:57
 */

declare(strict_types = 1);
namespace Patterns\Structural\Bridge;


interface Color
{
    public function getColor(): string;
}