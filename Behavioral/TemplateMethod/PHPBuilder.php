<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/30
 * Time: 22:48
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\TemplateMethod;


class PHPBuilder extends Template
{
    public function test()
    {
        return 'Running php test';
    }

    public function lint()
    {
        return 'Linting the php code';
    }
}