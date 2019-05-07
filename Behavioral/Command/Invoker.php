<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/7
 * Time: 22:30
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Command;


/**
 * 调用者 - 服务员
 * @package Patterns\Behavioral\Command
 */
class Invoker
{
    /**
     * @var \Patterns\Behavioral\Command\Command
     */
    private $command;

    /**
     * 设置命令
     *
     * @param \Patterns\Behavioral\Command\Command $command
     */
    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    /**
     * 通知
     *
     * @return string
     */
    public function notify()
    {
        return $this->command->execute();
    }
}