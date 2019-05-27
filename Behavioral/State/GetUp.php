<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/27
 * Time: 23:15
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\State;


class GetUp extends State
{
    public function handle(Person $person)
    {
        if ($person->getHour() >= 8 && $person->getHour() < 12) {
            return '起床';
        } else {
            $person->setState(new HaveLunch());
            return $person->request();
        }
    }
}