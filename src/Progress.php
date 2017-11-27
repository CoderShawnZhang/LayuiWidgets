<?php

/**
 * 进度条小部件
 *
 * 小部件的样式引用 Bootstrap
 */
namespace Layui\Widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Progress extends Widget
{
    public $a;

    public $label;
    public $percent;
    public $showpercent = false;

    public $options=[];

    public $barOptions = [];

    public function init()
    {
        parent::init();
        $defaultOptions = [
            "lay-filter" => "demo"
        ];
        if($this->showpercent) {
            $defaultOptions['lay-showpercent'] = 'true';
        }

        $this->options = array_merge($defaultOptions, $this->options);
        Html::addCssClass($this->options, ['widget' => 'layui-progress layui-progress-big']);//外层div 初始class
    }


    public function run()
    {
        $view = $this->getView();
        ProgressAsset::register($view);
        //        $id = $this->options['id'];
        $id = 'test';
        $view->registerJs("jQuery('#$id').yiiProgressTest();");
        return implode("\n", [
                Html::beginTag('div', $this->options),
                $this->renderProgress(),
                Html::endTag('div'),
            ]) . "\n";
    }
    protected function renderProgress(){
        $defaultOptions = [
            'role' => 'progressbar',
            'aria-valuenow' => $this->percent,
            'aria-valuemin' => 0,
            'aria-valuemax' => 100,
            'onclick' => "test()",
            'lay-percent' => "{$this->percent}%",
            //            'style' => "width:{$this->percent}%",
        ];

        $options = array_merge($defaultOptions, $this->barOptions);
        Html::addCssClass($options, ['widget' => 'layui-progress-bar layui-bg-cyan']);
        $out = Html::beginTag('div', $options);
        $out .= $this->label;
        $out .= Html::tag('span', \Yii::t('yii', '{percent}%', ['percent' => $this->percent]), [
            'class' => 'sr-only'
        ]);
        $out .= Html::endTag('div');
        return $out;
    }
}