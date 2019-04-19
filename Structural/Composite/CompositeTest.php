<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/19
 * Time: 22:38
 */

declare(strict_types = 1);
namespace Patterns\Structural\Composite;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testCanCreateFile()
    {
        $file = new File('test.txt');
        $this->assertEquals('文件名: test.txt', $file->display());
        return $file;
    }

    public function testCanCreateDir()
    {
        $dir = new Dir('test');
        $this->assertEquals('目录: test', $dir->display());
        return $dir;
    }

    /**
     * @depends testCanCreateFile
     * @depends testCanCreateDir
     * @param \Patterns\Structural\Composite\Component $file
     * @param \Patterns\Structural\Composite\Component $dir
     */
    public function testAddFileToDir(Component $file, Component $dir)
    {
        $dir->add('a', $file);
        $this->assertEquals('目录: test->文件名: test.txt', $dir->display());
    }

    /**
     * @depends  testCanCreateDir
     * @param \Patterns\Structural\Composite\Component $dir
     */
    public function testRemoveFileToDir(Component $dir)
    {
        $dir->remove('a');
        $this->assertArrayNotHasKey('a', $dir->getChildren());
    }
}
