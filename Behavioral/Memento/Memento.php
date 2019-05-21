<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/21
 * Time: 22:17
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Memento;


/**
 * Class Memento
 * @package Patterns\Behavioral\Memento
 */
class Memento
{
    /**
     * @var int
     */
    private $vit;

    /**
     * @var int
     */
    private $atk;

    /**
     * @var int
     */
    private $def;

    /**
     * Memento constructor.
     * @param int $vit
     * @param int $atk
     * @param int $def
     */
    public function __construct(int $vit, int $atk, int $def)
    {
        $this->vit = $vit;
        $this->atk = $atk;
        $this->def = $def;
    }

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
}