<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/22
 * Time: 23:13
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Observer;

/**
 * Class LiSi
 * @package Patterns\Behavioral\Observer
 */
class LiSi implements Observer
{
    /**
     * @var \Patterns\Behavioral\Observer\Computer
     */
    private $computer;

    /**
     * LiSi constructor.
     * @param \Patterns\Behavioral\Observer\Computer $computer
     */
    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    /**
     * @return string
     */
    public function update(): string
    {
        return '你关注电脑价格: ' . $this->computer->getPrice();
    }
}