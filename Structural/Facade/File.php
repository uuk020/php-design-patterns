<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/21
 * Time: 20:15
 */

declare(strict_types = 1);
namespace Patterns\Structural\Facade;

/**
 * 文件类
 * @package Patterns\Structural\Facade
 */
class File
{
    /**
     * 文件内容
     *
     * @return string
     */
    public function content()
    {
        return '文件内容';
    }
}