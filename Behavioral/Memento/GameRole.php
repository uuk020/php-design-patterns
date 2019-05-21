<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/21
 * Time: 22:10
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Memento;

/**
 * 游戏角色
 * @package Patterns\Behavioral\Memento
 */
class GameRole
{
    /**
     * 生命力
     * @var int
     */
    private $vit;

    /**
     * 攻击力
     * @var int
     */
    private $atk;

    /**
     * 防御力
     * @var int
     */
    private $def;

    /**
     * @return int
     */
    public function getAtk(): int
    {
        return $this->atk;
    }

    /**
     * @return int
     */
    public function getDef(): int
    {
        return $this->def;
    }

    /**
     * @return int
     */
    public function getVit(): int
    {
        return $this->vit;
    }

    /**
     * 初始化
     */
    public function init()
    {
        $this->def = 100;
        $this->vit = 100;
        $this->atk = 100;
    }

    /**
     * 战斗
     */
    public function fight()
    {
        $this->atk = 0;
        $this->def = 0;
        $this->vit = 1;
    }

    /**
     * 保存游戏角色状态
     *
     * @return \Patterns\Behavioral\Memento\Memento
     */
    public function saveState()
    {
        return new Memento($this->vit, $this->atk, $this->def);
    }

    public function recoveryState(Memento $memento)
    {
        $this->vit = $memento->getVit();
        $this->def = $memento->getDef();
        $this->atk = $memento->getAtk();
    }
}