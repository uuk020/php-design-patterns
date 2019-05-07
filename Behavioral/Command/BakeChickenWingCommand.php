<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/7
 * Time: 22:23
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Command;


class BakeChickenWingCommand extends Command
{
    public function execute(): string
    {
        return $this->receiver->bakeChickenWing();
    }
}