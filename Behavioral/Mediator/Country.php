<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/19
 * Time: 21:44
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Mediator;

/**
 * 国家
 * @package Patterns\Behavioral\Mediator
 */
class Country
{
    /**
     * 中介者
     *
     * @var \Patterns\Behavioral\Mediator\Mediator
     */
    protected $mediator;

    /**
     * Country constructor.
     * @param \Patterns\Behavioral\Mediator\Mediator $mediator
     */
    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}