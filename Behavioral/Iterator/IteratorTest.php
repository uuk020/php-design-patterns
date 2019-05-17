<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/17
 * Time: 22:40
 */
declare(strict_types = 1);
namespace Patterns\Behavioral\Iterator;

use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testIterator()
    {
        $concreteAggregate = new ConcreteAggregate();
        $concreteAggregate->add('a');
        $concreteAggregate->add('b');
        $concreteAggregate->add('c');
        $concreteIterator = new ConcreteIterator($concreteAggregate);
        $temp = [];
        while ($concreteIterator->isDone()) {
            $temp[] = $concreteIterator->next();
        }
        $this->assertEquals(['a', 'b', 'c'], $temp);
    }
}
