<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/14
 * Time: 22:42
 */

declare(strict_types = 1);
namespace Patterns\Structural\Adapter;

/**
 * Interface Person
 * @package Patterns\Structural\Adapter
 */
interface Person
{
    /**
     * @return string
     */
    public function say(): string ;
}