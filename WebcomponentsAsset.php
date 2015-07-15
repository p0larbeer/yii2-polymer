<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 15.07.15
 * Time: 14:16
 */

namespace p0larbeer\yii\polymer;

use yii\web\AssetBundle;

class WebcomponentsAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = 'p0larbeer/yii/polymer/assets';
    /**
     * @var array
     */
    public $js =[
        'webcomponentsjs/webcomponentsjs.min.js'
    ];

}