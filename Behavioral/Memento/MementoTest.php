<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/21
 * Time: 22:47
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Memento;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    /**
     * 初始化
     *
     * @return \Patterns\Behavioral\Memento\GameRole
     */
    public function testMemento()
    {
        $link = new GameRole();
        $link->init();
        $this->assertEquals([100, 100, 100], [$link->getAtk(), $link->getDef(), $link->getVit()]);
        return $link;
    }

    /**
     * 战斗后恢复数据
     *
     * @depends testMemento
     * @param \Patterns\Behavioral\Memento\GameRole $link
     */
    public function testFlight(GameRole $link)
    {
        $roleStateCaretaker =  new RoleStateCaretaker();
        $roleStateCaretaker->setMemento($link->saveState());
        $link->fight();
        $this->assertEquals([0, 0, 1], [$link->getAtk(), $link->getDef(), $link->getVit()]);
        $link->recoveryState($roleStateCaretaker->getMemento());
        $this->assertEquals([100, 100, 100], [$link->getAtk(), $link->getDef(), $link->getVit()]);
    }
}
