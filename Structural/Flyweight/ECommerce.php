<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/22
 * Time: 23:20
 */

declare(strict_types = 1);
namespace Patterns\Structural\Flyweight;


class ECommerce implements Flyweight
{
    /**
     * 网站名称
     *
     * @var string
     */
    private $name;

    /**
     * 营业额
     *
     * @var string
     */
    private $money = '1亿';

    /**
     * @param mixed $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 展示网站
     *
     * @param \Patterns\Structural\Flyweight\User $user
     * @return string
     */
    public function show(User $user): string
    {
        return  $this->name . '网站营业额: ' . $this->money . '用户: ' . $user->getName();
    }
}