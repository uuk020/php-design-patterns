<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/4
 * Time: 23:33
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\ChainOfResponsibility;

use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    public function testCommonManager()
    {
        $commonManager = new CommonManager();
        $request = ['type' => '请假', 'number' => 2];
        $this->assertEquals('经理审批通过', $commonManager->handleRequest($request));
        return $commonManager;
    }

    /**
     * @depends testCommonManager
     * @param \Patterns\Behavioral\ChainOfResponsibility\Handler $commonManager
     */
    public function testMajordomo(Handler $commonManager)
    {
        $majordomo = new Majordomo();
        $commonManager->setSuperior($majordomo);
        $request = ['type' => '请假', 'number' => 4];
        $this->assertEquals('总监审批通过', $commonManager->handleRequest($request));
    }

    /**
     * @depends testCommonManager
     * @param \Patterns\Behavioral\ChainOfResponsibility\Handler $commonManager
     */
    public function testGeneralManager(Handler $commonManager)
    {
        $majordomo = new Majordomo();
        $generalManager = new GeneralManager();
        $majordomo->setSuperior($generalManager);
        $commonManager->setSuperior($majordomo);
        $request = ['type' => '加薪', 'number' => 500];
        $this->assertEquals('总经理审批通过', $commonManager->handleRequest($request));
        $request['number'] = 2000;
        $this->assertEquals('再说吧', $commonManager->handleRequest($request));
        $request['number'] = 500;
        $this->assertEquals('总经理审批通过', $commonManager->handleRequest($request));
    }
}
