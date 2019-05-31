<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/31
 * Time: 22:54
 */
declare(strict_types = 1);
namespace Patterns\Behavioral\Visitor;

/**
 * Class Woman
 * @package Patterns\Behavioral\Visitor
 */
class Woman extends Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * Woman constructor.
     * @param $name
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 访问
     *
     * @param \Patterns\Behavioral\Visitor\State $visitor
     * @return mixed
     */
    public function accept(State $visitor)
    {
        return $visitor->getWomanConclusion($this);
    }
}