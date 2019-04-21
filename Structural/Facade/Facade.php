<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/21
 * Time: 20:26
 */

declare(strict_types = 1);
namespace Patterns\Structural\Facade;


class Facade
{
    private $file;

    private $encrypt;

    public function __construct()
    {
        $this->file = new File();
        $this->encrypt = new Encrypt();
    }

    public function operation()
    {
        return $this->file->content() . $this->encrypt->encrypt();
    }
}