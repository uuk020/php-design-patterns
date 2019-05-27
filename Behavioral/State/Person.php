<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/27
 * Time: 23:16
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\State;


/**
 * Class Person
 * @package Patterns\Behavioral\State
 */
class Person
{
    /**
     * @var \Patterns\Behavioral\State\State
     */
    private $state;

    /**
     * @var
     */
    private $hour;

    /**
     * Person constructor.
     * @param \Patterns\Behavioral\State\State $state
     */
    public function __construct(State $state)
    {
        $this->state = $state;
    }

    /**
     * @return int
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param int $hour
     */
    public function setHour($hour): void
    {
        $this->hour = $hour;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function request()
    {
        return $this->state->handle($this);
    }
}