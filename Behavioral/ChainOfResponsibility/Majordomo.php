<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/4
 * Time: 23:26
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\ChainOfResponsibility;

/**
 * 总监
 * @package Patterns\Behavioral\ChainOfResponsibility
 */
class Majordomo extends Handler
{
    /**
     * 总监处理请求
     *
     * @param array $request
     * @return string
     */
    public function handleRequest(array $request): string
    {
        if ($request['type'] === '请假' && $request['number'] <= 5) {
            return '总监审批通过';
        } else {
            if (!is_null($this->superior)) {
                return $this->superior->handleRequest($request);
            }
        }
    }
}