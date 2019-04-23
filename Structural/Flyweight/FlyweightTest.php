<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/22
 * Time: 23:38
 */

declare(strict_types = 1);
namespace Patterns\Structural\Flyweight;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    public function testCreateWebsite()
    {
        $factory = new FlyweightFactory();
        $website = $factory->getInstance('a');
        $factory->setWebsiteName('a', '产品展示');
        $this->assertEquals('网站分类: 产品展示, 用户: wythe', $website->show(new User('wythe')));
        $this->assertInstanceOf(NewsWebsite::class, $website);
        return $factory;
    }

    /**
     * @depends testCreateWebsite
     * @param \Patterns\Structural\Flyweight\FlyweightFactory $factory
     */
    public function testCreateOtherWebsite(FlyweightFactory $factory)
    {
        $otherWebsite = $factory->getInstance('a');
        $factory->setWebsiteName('a', '博客');
        $this->assertEquals('网站分类: 博客, 用户: nathan', $otherWebsite->show(new User('nathan')));
        $this->assertInstanceOf(NewsWebsite::class, $otherWebsite);
    }

    /**
     * @depends testCreateWebsite
     * @param \Patterns\Structural\Flyweight\FlyweightFactory $factory
     */
    public function testInstanceCount(FlyweightFactory $factory)
    {
        $this->assertEquals(1, $factory->getInstanceCount());
    }
}
