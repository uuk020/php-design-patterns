<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/7
 * Time: 21:58
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Command;

/**
 * 烤羊肉串命令
 * @package Patterns\Behavioral\Command
 */
class BakeMuttonCommand extends Command
{
    /**
     * 执行
     *
     * @return string
     */
    public function execute(): string
    {
        return $this->receiver->bakeMutton();
    }
}