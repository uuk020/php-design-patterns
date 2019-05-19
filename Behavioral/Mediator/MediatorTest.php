<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/19
 * Time: 22:04
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Mediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testSend()
    {
        $unitedNationsSecurityCouncil = new UnitedNationsSecurityCouncil();
        $usa = new USA($unitedNationsSecurityCouncil);
        $china = new China($unitedNationsSecurityCouncil);
        $unitedNationsSecurityCouncil->setColleague1($usa);
        $unitedNationsSecurityCouncil->setColleague2($china);
        $this->assertInstanceOf(USA::class, $unitedNationsSecurityCouncil->getColleague1());
        $this->assertInstanceOf(China::class, $unitedNationsSecurityCouncil->getColleague2());
        $this->assertEquals('对中国2000亿输美商品加征关税', $usa->declare('对中国2000亿输美商品加征关税'));
        $this->assertEquals('中国不喜欢贸易战 但我们能承受它', $china->declare('中国不喜欢贸易战 但我们能承受它'));
    }
}
