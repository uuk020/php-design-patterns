<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/7
 * Time: 21:52
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Command;


/**
 * 命令抽象
 * @package Patterns\Behavioral\Command
 */
abstract class Command
{
    /**
     * 接收者实例
     *
     * @var \Patterns\Behavioral\Command\Receiver
     */
    protected $receiver;

    /**
     * Command constructor.
     * @param \Patterns\Behavioral\Command\Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * 命令执行
     * @return string
     */
    abstract public function execute(): string;
}