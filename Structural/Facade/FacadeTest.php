<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/21
 * Time: 20:29
 */

declare(strict_types = 1);
namespace Patterns\Structural\Facade;

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testFacade()
    {
        $facade = new Facade();
        $this->assertEquals('文件内容加密', $facade->operation());
    }
}
