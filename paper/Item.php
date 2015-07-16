<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 16.07.15
 * Time: 14:56
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Item extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-item';
    /**
     * @var string the item content
     */
    public $content;

    public function init()
    {
        $view = $this->getView();
        ItemAsset::register($view);
        echo Html::beginTag($this->tagName, $this->options);
    }

    public function run()
    {
        return $this->content . Html::endTag($this->tagName);
    }
}

