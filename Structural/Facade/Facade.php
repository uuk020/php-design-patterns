<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/21
 * Time: 20:26
 */

declare(strict_types = 1);
namespace Patterns\Structural\Facade;

/**
 * 门面模式
 * @package Patterns\Structural\Facade
 */
class Facade
{
    /**
     * 文件
     *
     * @var \Patterns\Structural\Facade\File
     */
    private $file;

    /**
     * 加密
     *
     * @var \Patterns\Structural\Facade\Encrypt
     */
    private $encrypt;

    /**
     * Facade constructor.
     */
    public function __construct()
    {
        $this->file = new File();
        $this->encrypt = new Encrypt();
    }

    /**
     * 操作
     *
     * @return string
     */
    public function operation()
    {
        return $this->file->content() . $this->encrypt->encrypt();
    }
}