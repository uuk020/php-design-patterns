<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/27
 * Time: 23:21
 */

namespace Patterns\Behavioral\State;


class HaveLunch extends State
{
    public function handle(Person $person)
    {
        if ($person->getHour() <= 12) {
            return '吃午餐';
        } else {
            $person->setState(new Study());
            return $person->request();
        }
    }
}