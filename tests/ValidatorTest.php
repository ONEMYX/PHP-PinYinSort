<?php

use MYX\PinYin;

require '../vendor/autoload.php';


$arr    = array(
    array('name' => '梁朝伟', 'age' => 23),
    array('name' => 'andy', 'age' => 24),
    array('name' => '1黎明', 'age' => 19),
    array('name' => '郭富城', 'age' => 20)
);
$pinyin = PinYin::init();
$a      = $pinyin->sort( $arr );
var_dump($a);