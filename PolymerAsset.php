<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 15.07.15
 * Time: 14:07
 */

namespace p0larbeer\yii\polymer;

use yii\web\AssetBundle;

class PolymerAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/p0larbeer/yii2-polymer/assets';
    /**
     * @var array
     */
    public $href = [];
    /**
     * @var array
     */
    public $depends =[
        //'p0larbeer\yii\polymer\WebcomponentsAsset'
    ];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);
        $manager = $view->getAssetManager();
        foreach ($this->href  as $href) {
            $view->registerLinkTag(['rel'=>'import','href'=>$manager->getAssetUrl($this, $href)]);
        }
    }
}