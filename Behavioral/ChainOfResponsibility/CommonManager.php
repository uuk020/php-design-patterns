<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/4
 * Time: 23:20
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\ChainOfResponsibility;

/**
 * 经理
 * @package Patterns\Behavioral\ChainOfResponsibility
 */
class CommonManager extends Handler
{
    /**
     * 经理处理请求
     *
     * @param array $request
     * @return string
     */
    public function handleRequest(array $request): string
    {
        if ($request['type'] === '请假' && $request['number'] <= 2) {
            return '经理审批通过';
        } else {
            if (!is_null($this->superior)) {
                return $this->superior->handleRequest($request);
            }
        }
    }
}