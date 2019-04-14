<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/14
 * Time: 22:55
 */

declare(strict_types = 1);
namespace Patterns\Structural\Adapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testSayAmerican()
    {
        $american = new American();
        $this->assertEquals('hello', $american->say());
    }

    public function testCanTranslate()
    {
        $chinesePeople = new ChinesePeople();
        $translator = new Adapter($chinesePeople);
        $this->assertEquals('你好', $translator->say());
    }
}
