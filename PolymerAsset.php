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
    public $sourcePath = 'p0larbeer/yii/polymer/assets';
    /**
     * @var array
     */
    public $href = [];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);
        $manager = $view->getAssetManager();
        foreach ($this->href  as $href) {
            $view->registerLinkTag(['rel'=>'import','href'=>$manager->getAssetUrl($this, $href)]);
        }
    }
}