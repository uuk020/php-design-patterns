<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/21
 * Time: 22:17
 */
declare(strict_types = 1);
namespace Patterns\Behavioral\Memento;


class RoleStateCaretaker
{
    /**
     * @var \Patterns\Behavioral\Memento\Memento
     */
    private $memento;

    /**
     * @return \Patterns\Behavioral\Memento\Memento
     */
    public function getMemento(): Memento
    {
        return $this->memento;
    }

    /**
     * @param \Patterns\Behavioral\Memento\Memento $memento
     */
    public function setMemento(Memento $memento): void
    {
        $this->memento = $memento;
    }
}