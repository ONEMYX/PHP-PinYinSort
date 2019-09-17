<?php


use MYX\PinYin;
use PHPUnit\Framework\TestCase;

class PinYinTest extends TestCase
{

    /**
     * @depends testArr
     *
     * @param array $arr
     */
    public function testSort(array $arr)
    {
        $pinyin = PinYin::init();
        $size = $pinyin->sort($arr);
        $this->assertNotEquals($arr,$size);
    }
    public function testArr()
    {
        $arr    = array(
            array('name' => '梁朝伟', 'age' => 23),
            array('name' => 'andy', 'age' => 24),
            array('name' => '1黎明', 'age' => 19),
            array('name' => '郭富城', 'age' => 20)
        );
        $this->assertNotEmpty($arr);
        return $arr;
    }

}
