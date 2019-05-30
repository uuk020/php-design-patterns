<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/30
 * Time: 22:51
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\TemplateMethod;

use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testTemplateMethod()
    {
        $phpBuilder = new PHPBuilder();
        $this->assertEquals('Running php test, Linting the php code', $phpBuilder->build());
        $goBuilder = new GoBuilder();
        $this->assertEquals('Running go test, Linting the go code', $goBuilder->build());
    }
}
