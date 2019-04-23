<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/22
 * Time: 23:17
 */

declare(strict_types = 1);
namespace Patterns\Structural\Flyweight;

/**
 * 资讯网站
 * @package Patterns\Structural\Flyweight
 */
class NewsWebsite implements Flyweight
{
    /**
     * 网站名称
     *
     * @var string
     */
    private $name;

    /**
     * 设置资讯网站名称
     *
     * @param mixed $name
     */
    public function setName($name): void
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
        return '网站分类: ' . $this->name . ', 用户: ' . $user->getName();
    }
}