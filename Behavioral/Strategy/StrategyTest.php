<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/26
 * Time: 22:37
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Strategy;

use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testPrimaryMember()
    {
        $primaryMember = new PrimaryMemberStrategy();
        $book = new Context($primaryMember);
        $this->assertEquals(100, $book->quote(100));
    }

    public function testIntermediateMember()
    {
        $intermediateMember = new IntermediateMemberStrategy();
        $book = new Context($intermediateMember);
        $this->assertEquals(90, $book->quote(100));
    }

    public function testAdvancedMember()
    {
        $advancedMember = new AdvancedMemberStrategy();
        $book = new Context($advancedMember);
        $this->assertEquals(80, $book->quote(100));
    }

}
