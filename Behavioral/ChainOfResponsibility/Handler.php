<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/4
 * Time: 23:16
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\ChainOfResponsibility;


abstract class Handler
{
    /**
     * 上级处理者
     *
     * @var \Patterns\Behavioral\ChainOfResponsibility\Handler
     */
    protected $superior;

    /**
     * @return mixed
     */
    public function getSuperior()
    {
        return $this->superior;
    }

    /**
     * @param \Patterns\Behavioral\ChainOfResponsibility\Handler $superior
     */
    public function setSuperior(Handler $superior): void
    {
        $this->superior = $superior;
    }

    /**
     * 处理请求
     *
     * @param array $request
     * @return string
     */
    abstract public function handleRequest(array $request): string ;
}