<?php
/**
 * Created by PhpStorm.
 * User: anlewo0208
 * Date: 2017/11/18
 * Time: 下午6:21
 */

namespace Layui\Widgets;


use yii\web\AssetBundle;

class ProgressAsset extends AssetBundle
{
    public $sourcePath = "@yii/assets";

    public $js = [
        'yii.test.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}