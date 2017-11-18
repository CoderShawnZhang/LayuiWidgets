<?php

/**
 * Created by PhpStorm.
 * User: anlewo0208
 * Date: 2017/11/18
 * Time: 下午12:11
 */
namespace Layui\Widgets;

use yii\base\Widget;

class Progress extends Widget
{
    public $percent;

    public $label;

    public function init()
    {
        parent::init();
    }
    public function run()
    {
        return \yii\bootstrap\Progress::widget(['percent' => $this->percent,'label' => $this->label]);
    }
}