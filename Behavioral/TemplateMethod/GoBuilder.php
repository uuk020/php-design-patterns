<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/30
 * Time: 22:49
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\TemplateMethod;


class GoBuilder extends Template
{
    public function test()
    {
        return 'Running go test';
    }

    public function lint()
    {
        return 'Linting the go code';
    }
}