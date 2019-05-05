<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/4
 * Time: 23:29
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\ChainOfResponsibility;

/**
 * 总经理
 * @package Patterns\Behavioral\ChainOfResponsibility
 */
class GeneralManager extends Handler
{
    /**
     * 总经理处理请求
     *
     * @param array $request
     * @return string
     */
    public function handleRequest(array $request): string
    {
        if ($request['type'] === '请假') {
            return '总经理审批通过';
        } elseif ($request['type'] === '加薪') {
            if ($request['number'] > 500) {
                return '再说吧';
            } else {
                return '总经理审批通过';
            }
        }
    }
}