<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/30
 * Time: 22:45
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\TemplateMethod;


abstract class Template
{
    public final function build()
    {
        return $this->test() . ', ' . $this->lint();
    }

    abstract public function test();
    abstract public function lint();
}