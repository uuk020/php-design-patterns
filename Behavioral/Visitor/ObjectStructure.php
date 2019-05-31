<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/31
 * Time: 23:03
 */
declare(strict_types = 1);
namespace Patterns\Behavioral\Visitor;

/**
 * 对象结构
 * @package Patterns\Behavioral\Visitor
 */
class ObjectStructure
{
    /**
     * @var array
     */
    private $collection = [];

    /**
     * 添加
     *
     * @param \Patterns\Behavioral\Visitor\Person $person
     */
    public function attach(Person $person)
    {
        array_push($this->collection, $person);
    }

    /**
     * 移除
     *
     * @param \Patterns\Behavioral\Visitor\Person $person
     */
    public function detach(Person $person)
    {
        $index = array_search($person, $this->collection);
        if ($index !== FALSE) {
            unset($this->collection[$index]);
        }
    }


    /**
     * 显示
     *
     * @param \Patterns\Behavioral\Visitor\State $visitor
     * @return array
     */
    public function display(State $visitor): array
    {
        $temp = [];
        foreach ($this->collection as $item) {
            $temp[] = $item->accept($visitor);
        }
        return $temp;
    }
}