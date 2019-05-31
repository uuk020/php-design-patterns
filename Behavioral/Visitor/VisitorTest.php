<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/31
 * Time: 23:13
 */
declare(strict_types = 1);
namespace Patterns\Behavioral\Visitor;

use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testSuccess()
    {
        $objectStructure = new ObjectStructure();
        $objectStructure->attach(new Man('男人'));
        $objectStructure->attach(new Woman('女人'));
        $this->assertEquals(
            ['每一个成功的男人背后多半有一个伟大的女人', '每一个成功的女人背后大多有一个不成功的男人'],
            $objectStructure->display(new Success())
        );
        return $objectStructure;
    }


    /**
     * @depends testSuccess
     * @param \Patterns\Behavioral\Visitor\ObjectStructure $objectStructure
     */
    public function testFailing(ObjectStructure $objectStructure)
    {
        $this->assertEquals(
            ['男人闷头喝酒, 谁也不用劝', '女人疯狂购物'],
            $objectStructure->display(new Failing())
        );
    }
}
