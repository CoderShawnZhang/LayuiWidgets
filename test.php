<?php
/**
 * Created by PhpStorm.
 * User: anlewo0208
 * Date: 2017/11/18
 * Time: 下午12:12
 */
require_once __DIR__ . '/vendor/autoload.php';

//echo \Layui\Widgets\Progress::widget(['percent'=>80,'options'=>[]]);

$t= new \Layui\Widgets\Test();
echo $t->t();