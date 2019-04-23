<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/22
 * Time: 23:23
 */

declare(strict_types = 1);
namespace Patterns\Structural\Flyweight;

/**
 * 享元工厂
 * @package Patterns\Structural\Flyweight
 */
class FlyweightFactory
{
    /**
     * 享元实例数组
     *
     * @var array
     */
    private $instance = [];

    /**
     * 获取享元实例
     *
     * @param string $key
     * @return \Patterns\Structural\Flyweight\Flyweight
     */
    public function getInstance(string $key): Flyweight
    {
        if (!key_exists($key, $this->instance)) {
            $this->instance[$key] = new NewsWebsite();
        }
        return $this->instance[$key];
    }

    /**
     * 设置网站名称
     *
     * @param        $key
     * @param string $name
     */
    public function setWebsiteName($key, string $name)
    {
        if (key_exists($key, $this->instance)) {
            $this->instance[$key]->setName($name);
        }
    }

    /**
     * 享元数组总数
     *
     * @return int
     */
    public function getInstanceCount(): int
    {
        return count($this->instance);
    }
}